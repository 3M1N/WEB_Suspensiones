<?
require 'funphp/db_connect.php';

$qry="INSERT INTO  `perfilesusuarios` (
`idperfil` ,
`perfil`
)
VALUES (
'4',  'Superadministrador'
);";
$res = $db_object->query ( $qry );
if (! $res) 
{
	echo "Qry con error";
} 
else 
{
	
	echo "Qry exitoso=".$qry;
	          
}

?>