<?php
//Almacenando los valores recibidos
//print_r($_FILES);die();
$nombre = $_POST['nombre'];
$email   = $_POST['email'];
$sAsunto=$_POST['asunto'];
$comentarios = $_POST['comentarios'];

$sDe = "contacto@suspensiones.mx";
$sPara="contacto@suspensiones.mx";

$bHayFicheros = 0;
$sCabeceraTexto = "";
$sAdjuntos = "";

if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";

$sTexto .= "
Mensaje de contacto desde www.suspensiones.mx
<br>
<br>
<strong>Nombre:</strong>$nombre
<br>
<br>
<strong>Correo:</strong>$email
<br>
<br>
<strong>Asunto:</strong>$sAsunto
<br>
<br>
<strong>Comentarios:</strong>".$comentarios." ";




if ($bHayFicheros == 0)
{
	$bHayFicheros = 1;
	$sCabeceras .= "Content-type: multipart/mixed;";
	$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
	
	$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
	$sCabeceraTexto .= "Content-type: text/html;charset=iso-8859-1\n";
	$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto;
}

if ($_FILES['adjunto']['size'] > 0)
{
	$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
	$sAdjuntos .= "Content-type: ".$_FILES['adjunto']['type'].";name=\"".$_FILES['adjunto']['name']."\"\n";;
	$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
	$sAdjuntos .= "Content-disposition: attachment;filename=\"".$_FILES['adjunto']['name']."\"\n\n";
	
	$oFichero = fopen($_FILES['adjunto']["tmp_name"], 'r');
	$sContenido = fread($oFichero, filesize($_FILES['adjunto']["tmp_name"]));
	$sAdjuntos .= chunk_split(base64_encode($sContenido));
	fclose($oFichero);
}

if ($bHayFicheros)
$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";

@mail($sPara, $sAsunto,$sTexto, $sCabeceras);
/*
$sCabeceraTexto = "";
$sAdjuntos = "";

if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";

$sTexto .= "
Contacto Todo en Suspensiones
<br>
<br>
<strong>Nombre:</strong>$nombre
<br>
<br>
<strong>Correo:</strong>$email
<br>
<br>
<strong>Asuto:</strong>$sAsunto
<br>
<br>
<strong>Comentarios:</strong>".$comentarios." ";




$sCabeceras .= "Content-type: multipart/mixed;";
//$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

//$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
$sCabeceraTexto .= "Content-type: text/html;charset=iso-8859-1\n";
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto;





@mail($sPara, $sAsunto,$sTexto, $sCabeceras);
return 1;
  
 */
 ?>