<?php
include ('../adodb/adodb-exceptions.inc.php');
include ("../adodb/adodb.inc.php");
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
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'dbsuspensiones';
	$db_host = 'localhost';
	*/	
	
	
	
	
	$db_object->Connect ( $db_host, $db_user, $db_pass, $db_name );
} catch ( exception $e ) {
	var_dump ( $e );
}

?>
