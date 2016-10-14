<?php session_start(); ob_start();
print_r($_SESSION);
require 'funphp/db_connect.php';
$idperfil=$_SESSION['idperfil'];

$qry="SELECT perfil FROM perfilesusuarios WHERE idperfil='$idperfil'";
$res = $db_object->getAll ( $qry );
$perfil = utf8_encode($res [0] ['perfil']);
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
            </section>
            <!-- end header top -->
            
            <!-- begin navigation bar -->
            <section id="navbar" class="clearfix">
                <!-- begin navigation -->
                <nav id="nav">
                    <ul id="navlist" class="clearfix">
                    	 <li class="current"><a href="frm_usuarios.php" >Usuarios</a></li>
                    	  <li><a href="frm_clientes.php" >Clientes</a></li>
                    	  <li><a href="frm_bolsatrabajo.php" >Bolsa Trabajo</a></li>
                    	  <li><a href="frm_novedades.php" >Productos</a></li>
                        
                        <li><a href="frm_descargas.php" >Descargas</a></li>
                    	<!--
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
                       -->
                        
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
        	<!-- begin page header -->
            <header id="page-header">
            	<h1 id="page-title">Panel de Administración</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            <p>Bienvenido al Panel de Administración, desde aqui podras administrar la información que se mostrara en el sitio web.</p>
            <p><strong>Usuarios:</strong> En este modulo administras los usuarios que podran ingresar a este panel de administración.</p>
            <p><strong>Clientes:</strong> Administrar los clientes que tendran acceso para descargar listas de precios u otros archivos de su interes.</p>
            <p><strong>Bolsa de Trabajo:</strong> Publicar las oportunidades de empleo que la empresa tiene, estas oportunidades se mostraran en el sitio web en la sección, bolsa de trabajo.</p>
            <p><strong>Novedades:</strong> Publicar los nuevos productos que la empresa ofrece. </p>
            <p><strong>Descargas:</strong> Subir archivos como listas de precios, especificaciones técnicas, etc que son de interes para los clientes, estos archivos solo se pueden consultar por clientes registrados y con acceso.</p>
            <!-- end main content -->
        </section>
        <!-- end content -->             
    
	<!-- begin footer -->
	<footer id="footer">
    	<div class="container">
            <!-- begin footer top -->
            <div id="footer-top">
            	<!--
               
               -->
            </div>
            <!-- end footer top -->	
            
            <!-- begin footer bottom -->
            <div id="footer-bottom">
            	<div class="one-half">
                	<p>Copyright &copy; 2013 Todo en Suspensión. Creado por <a href="http://www.limaeg.com">LIMA EG</a>.</p>
                </div>
                <!--
                <div class="one-half column-last">
                	<nav id="footer-nav">
                        <ul>
                        	<li class="current"><a href="frm_usuarios.php" >Usuarios</a> &middot;</li>
	                        <li><a href="frm_clientes.php" >Clientes</a> &middot;</li>
	                        <li><a href="frm_bolsatrabajo.php" >Bolsa Trabajo</a> &middot;</li>
	                        <li><a href="frm_novedades.php" >Novedades</a> &middot;</li>
	                        <li><a href="frm_descargas.php" >Descargas</a> &middot;</li>
                        
                            
                        </ul>
                    </nav>
                </div>
                -->
            </div>
            <!-- end footer bottom -->	
        </div>
	</footer>
	<!-- end footer -->
</div>
<!-- end container -->

</body>
</html>