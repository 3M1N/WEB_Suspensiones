<?php
include ('adodb/adodb-exceptions.inc.php');
include ("adodb/adodb.inc.php");
try {
	$db_object = ADONewConnection ( 'mysql' ); # eg 'mysql' o 'postgres'
	$db_object->debug = false;
	
	$db_engine = 'mysql';
	//LIMA
	
	$db_user = 'susp123';
	$db_pass = '123susp';
	$db_name = 'suspensiones';
	$db_host = 'xe1uca1.ipowermysql.com';
	/*
	$dsn = 'mysql://root:root@localhost/dbsuspensiones'; 
    $conn = ADONewConnection($dsn);  # no necesita Connect()
	
	 
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'dbsuspensiones';
	$db_host = 'localhost';
	*/
	
	
	//$db_host="www.mercadosiete.com";
	//$db_host="https://phpmyadmin.1and1.mx/";
	$db_object->Connect ( $db_host, $db_user, $db_pass, $db_name );
} catch ( exception $e ) {
	var_dump ( $e );
}

?>
