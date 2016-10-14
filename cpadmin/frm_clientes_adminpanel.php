<?
session_start ();

//print_r($_SESSION);

$listaprecios=$_SESSION['listaprecios'];
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
	
	<title>Todo en Suspensi&oacute;n - M&oacute;dulo Clientes </title>
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
                    
                     <div class="contact-info">
                        <p style="color:#f6b200; font-weight: bold;text-align: right; font-size: 16px">Bienvenido al m&oacute;dulo de clientes</p>
                    </div>
                    <!-- begin contact info -->
                    <div class="contact-info">
                        <p style="font-size: 16px"><?=utf8_encode($_SESSION['empresa']);?></p>
                        <p style="font-weight: bold;text-align: right; font-size: 16px">Empresa:</p>
                    </div>
                    <!-- end contact info -->
                </div>
                <!-- end header right -->
            </section>
            <!-- end header top -->
            
            <!-- begin navigation bar -->
            <section id="navbar" class="clearfix">
                <!-- begin navigation -->
                <nav id="nav">
                    <ul id="navlist" class="clearfix">
                        <li class="current"><a href="frm_clientes_listas.php?listaprecios=<?=$listaprecios?>" >Descargas</a></li>
                        <li><a href="frm_clientes_facturacion.php" >Facturación</a></li>
                        
                        <li><a href="../clientes.html" >Salir</a></li>
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
            	<h1 id="page-title">Panel de control clientes</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            <p style="font-size: 16px">Bienvenido al Panel de Administración, desde aqui podras descargar las listas de precios o documentos de interes.</p>
            
            <p style="font-size: 16px">Para ver o descargar las listas de precios:</p>
            <p>
            	<ol style="padding-left: 50px; font-size: 16px">
            		<li>Da click en la pestaña Lista de precios</li>
            		<li>A contnuación se mostrara las listas de precios y/o documentos </li>
            		<li>Da click sobre el nombre del documento que deseas descargar </li>
            		<li>Listo el archivo se descarga</li>
            	</ol>
            </p>
             <!-- end main content -->
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