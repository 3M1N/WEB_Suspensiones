<?

$functionSolicitada = $_POST ['function'];

if ($functionSolicitada == 'ingresarsistema') 
{
	$respuesta = ingresarsistema();
	echo $respuesta;
}

else 
{
	echo sinSolicitarFunccion ();
}



function ingresarsistema()
{
	session_start (); // Use session variable on this page. This function must put on the top of page.
	//session_destroy (); ////// Logout Section. Delete all session variable.
	require 'funphp/db_connect.php';
	
	$txtcorreousuario = utf8_decode($_POST ["txtcorreousuario"]);
	$txtpassword = utf8_decode($_POST ["txtpassword"]);
	
	
	//Valido si existe el registro con el usuario y pssword y esta activo
	$qry = "SELECT count(*) as existe FROM usuarios WHERE activo=1 and correo='$txtcorreousuario' and password='$txtpassword'";
	$res = $db_object->getAll ( $qry );
	$existe = $res [0] ['existe'];
	
	if($existe>0)
	{
		$qry = "SELECT idperfil, idusuario,nombre, password FROM usuarios WHERE activo=1 and correo='$txtcorreousuario' and password='$txtpassword'";
		$res = $db_object->getAll ( $qry );
		$idperfil = $res [0] ['idperfil'];
		$idusuario = $res [0] ['idusuario'];
		$nombre = $res [0] ['nombre'];
		$password = $res [0] ['password'];
		session_register ( "idusuario" ); 
		session_register ( "nombreusuario" );
		session_register ( "idperfil" );
		$_SESSION ['idperfil'] = $idperfil;
		$_SESSION ['idusuario'] = $idusuario;
		$_SESSION ['nombreusuario'] = $nombre;
		//return "idusuario=".$_SESSION ['idusuario'] ;die();
		$respuesta=1;
	}
	else
	{
	
		$respuesta=0;
	}
	
	return $respuesta;
}

function sinSolicitarFunccion() {
	
	return "Sin funcion solicitada";
}

?>