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
	session_destroy (); ////// Logout Section. Delete all session variable.
	require 'funphp/db_connect.php';
	
	$txtcorreousuario = utf8_decode($_POST ["txtcorreousuario"]);
	$txtpassword = utf8_decode($_POST ["txtpassword"]);
	
	
	//Valido si existe el registro con el usuario y pssword y esta activo
	$qry = "SELECT count(*) as existe FROM clientes WHERE activo=1 and correo='$txtcorreousuario' and password='$txtpassword'";
	$res = $db_object->getAll ( $qry );
	$existe = $res [0] ['existe'];
	
	if($existe>0)
	{
		
		$qry = "SELECT idcliente, empresa FROM clientes WHERE activo=1 and correo='$txtcorreousuario' and password='$txtpassword'";
		$res = $db_object->getAll ( $qry );
		$empresa = $res [0] ['empresa'];
		$listaprecios = $res [0] ['listaprecios'];
		$idcliente = $res [0] ['idcliente'];
		
		session_register ( "empresa" );
		session_register ( "idcliente" ); 
		session_register ( "listaprecios" );
		
		$_SESSION ['idcliente'] = $idcliente;
		$_SESSION ['empresa'] = $empresa;
		$_SESSION ['listaprecios'] = $listaprecios;
		
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