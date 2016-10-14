<?
session_start ();
require 'funphp/db_connect.php';
$idperfil=$_SESSION['idperfil'];

$qry="SELECT perfil FROM perfilesusuarios WHERE idperfil='$idperfil'";
$res = $db_object->getAll ( $qry );
$perfil = utf8_encode($res [0] ['perfil']);

include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('clientes');
$xcrud->primary('idcliente');
$xcrud->columns('rfc, empresa,correo, password, cliente_1, cliente_2, cliente_3,cliente_4, cliente_5, activo');
$xcrud->order_by('empresa','asc');
$xcrud->table_name('Modulo de clientes');

$xcrud->relation('idestado','cat_estados','idestado','estado','');
$xcrud->pass_default('idestado','22');
//Campos obligatorios
$xcrud->validation_required('contacto');
$xcrud->validation_required('empresa');
$xcrud->validation_required('correo');
$xcrud->validation_required('password');



//Tipos de dtos de los campos
//$xcrud->change_type('password', 'password', '', 15);

//$xcrud->readonly('activo');

$xcrud->validation_pattern('correo', 'email');
$xcrud->change_type('listaprecios','select','Lista precios 1','Lista precios 1,Lista precios 2,Lista precios 3,Lista precios 4, Lista precios 5');
//$xcrud->fields('idperfil, nombre, correo, password');
$xcrud->label('direccion', 'Dirección');
$xcrud->label('rfc', 'RFC');
$xcrud->label('idestado', 'Estado');
$xcrud->label('telefono', 'Teléfono');
$xcrud->label('cliente_1', 'Cliente 1');
$xcrud->label('cliente_2', 'Cliente 2');
$xcrud->label('cliente_3', 'Cliente 3');
$xcrud->label('cliente_4', 'Cliente 4');
$xcrud->label('cliente_5', 'Cliente 5');

$xcrud->benchmark(true);


	//$xcrud->change_type('idsubsuperior','select','email2@ex.com','email1@ex.com,email2@ex.com,email3@ex.com,email4@ex.com,email5@ex.com');
	//$xcrud->change_type('idsubsuperior','selectDB','','','', 'select idsubdesarrollo, nombre from subdesarrollos where iddesarrollo=1','idsubsuperior', 'nombre','','' );
	//$qry, $idcampo, $campomostrar, $seleccionado, $evento
	//$xcrud->change_fromdb('idsubsuperior','select idsubdesarrollo, nombre from subdesarrollos where iddesarrollo=1','idsubdesarrollo','nombre','','','');
	//$xcrud->change_fromdb('nombreselect','qry','idcampo','campomostrar','seleccionado','ordentab','evento');
	
?>
<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
	<meta name="description" content="Finesse is a responsive business and portfolio theme carefully handcrafted using the latest technologies. It features a clean design, as well as extended functionality that will come in very handy.">
	<meta name="keywords" content="Finesse, responsive business portfolio theme, HTML5, CSS3, clean design">
	<meta name="author" content="Ixtendo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
	<!-- begin CSS -->
	<link href="style.css" type="text/css" rel="stylesheet" id="main-style">
	<!--[if IE]> <link href="css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
	<link href="css/orange.css" type="text/css" rel="stylesheet" id="color-style">
    <!-- end CSS -->
	
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<!-- begin JS -->
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/ie.js" type="text/javascript"></script> <!-- IE detection -->
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
	<script src="js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]><script src="js/respond.min.js" type="text/javascript"></script><![endif]--> <!-- Respond -->
	<script src="js/jquery.polyglot.language.switcher.js" type="text/javascript"></script> <!-- language switcher -->
    <script src="js/ddlevelsmenu.js" type="text/javascript"></script> <!-- drop-down menu -->
    <script type="text/javascript"> <!-- drop-down menu -->
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="js/tinynav.min.js" type="text/javascript"></script> <!-- tiny nav -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
	<script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
	<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script> <!-- touchSwipe -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Todo en Suspensiones - Panel de Administración </title>
</head>

<body>
<!-- begin container -->
<div id="wrap">
	<!-- begin header -->
        <header id="header" class="container">
            <!-- begin header top -->
            <section id="header-top" class="clearfix">
                <!-- begin header left -->
                <div class="one-half">
                    <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="Finesse"></a></h1>
                    <p id="tagline"></p>
                </div>
                <!-- end header left -->
                
                <!-- begin header right -->
               <!-- begin header right -->
                <div class="one-half column-last">
                    
                   <!-- begin header right -->
	                <div class="one-half column-last" style="width:100%">
	                    
	                    <p style="color:#f6b200; font-weight: bold;text-align: right">Bienvenido al panel de administración</p>
	                    <!-- begin contact info -->
	                    <div>
	                    	<p   style="text-align: right; float: right;line-height: 25px ">
	                    		<strong>Usuario:</strong>&nbsp;<?=$_SESSION['nombreusuario'];?>
	                    		<br>
	                    		<strong >Perfil:</strong>&nbsp;<?=$perfil;?></p>
	                    </div>
	                    <!-- end contact info -->
	                </div>
	                <!-- end header right -->
                </div>
                <!-- end header right -->
                <!-- end header right -->
            </section>
            <!-- end header top -->
            
            <!-- begin navigation bar -->
            <section id="navbar" class="clearfix">
                <!-- begin navigation -->
                <nav id="nav">
                    <ul id="navlist" class="clearfix">
                        <?
                    	if($idperfil==4)
						{
						?>
						  <li class="current"><a href="frm_usuarios.php" >Usuarios</a></li>
						<?
						}
                    	?>
                    	
                    	<?
                    	if($idperfil==4 || $idperfil==1 || $idperfil==2)
						{
						?>
                        <li><a href="frm_clientes.php" >Clientes</a></li>
                        <?
						}
                    	?>
                    	
                    	<?
                    	if($idperfil==4 || $idperfil==1 || $idperfil==3)
						{
						?>
                        <li><a href="frm_bolsatrabajo.php" >Bolsa Trabajo</a></li>
                        <?
						}
                    	?>
                    	
                    	<?
                    	if($idperfil==4 || $idperfil==1 || $idperfil==2)
						{
						?>
                        <li><a href="frm_novedades.php" >Productos</a></li>
                        
                        <li><a href="frm_descargas.php" >Descargas</a></li>
                        <?
						}
                    	?>
                        <li><a href="index.php" >Salir</a></li>
                    </ul>
                </nav>
                <!-- end navigation -->
                
               
            </section>
            <!-- end navigation bar -->
            
        </header>
        <!-- end header -->
        
    <!-- begin content -->
        <section id="content" class="container clearfix">
        	<?php
			    echo $xcrud->render();
			?>
       </section>
        <!-- end content -->             
    
	<!-- begin footer -->
	<footer id="footer">
    	<div class="container">
            <!-- begin footer top -->
            <div id="footer-top">
            	
            </div>
            <!-- end footer top -->	
            
            <!-- begin footer bottom -->
            <div id="footer-bottom">
            	<div class="one-half">
                	<p>Copyright &copy; 2013 Todo en Suspensión. Creado por <a href="http://www.limaeg.com">LIMA EG</a>.</p>
                </div>
                
            </div>
            <!-- end footer bottom -->	
        </div>
	</footer>
	<!-- end footer -->
</div>
<!-- end container -->

</body>
</html>