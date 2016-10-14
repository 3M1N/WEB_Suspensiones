<?php
session_start ();
require 'funphp/db_connect.php';
$idcliente=$_SESSION['idcliente'];
$qry="SELECT cliente_1, cliente_2, cliente_3, cliente_4, cliente_5 FROM clientes WHERE idcliente='$idcliente'";
$res = $db_object->getAll ( $qry );
$cliente_1 = $res [0] ['cliente_1'];
$cliente_2 = $res [0] ['cliente_2'];
$cliente_3 = $res [0] ['cliente_3'];
$cliente_4 = $res [0] ['cliente_4'];
$cliente_5 = $res [0] ['cliente_5'];

$cadenawhere="";
if($cliente_1==1)
{
	$cadenawhere=" listaprecios='Cliente 1'";
}


if($cliente_2==1 && $cliente_1==1)
{
	$cadenawhere.=" OR listaprecios='Cliente 2'";
}
elseif($cliente_2==1 && $cliente_1==0)
{
	$cadenawhere.=" listaprecios='Cliente 2'";
}


if($cliente_3==1 && ($cliente_1==1 || $cliente_2==1))
{
	$cadenawhere.=" OR listaprecios='Cliente 3'";
}
elseif($cliente_3==1 && $cliente_1==0 && $cliente_2==0)
{
	$cadenawhere.=" listaprecios='Cliente 3'";
}


if($cliente_4==1 && ($cliente_1==1 || $cliente_2==1 || $cliente_3==1))
{
	$cadenawhere.=" OR listaprecios='Cliente 4'";
}
elseif($cliente_4==1 && $cliente_1==0 && $cliente_2==0 && $cliente_3==0)
{
	$cadenawhere.=" listaprecios='Cliente 4'";
}

if($cliente_5==1 && ($cliente_1==1 || $cliente_2==1 || $cliente_3==1 || $cliente_4==1))
{
	$cadenawhere.=" OR listaprecios='Cliente 5'";
}
elseif($cliente_5==1 && $cliente_1==0 && $cliente_2==0 && $cliente_3==0 && $cliente_4==0)
{
	$cadenawhere.=" listaprecios='Cliente 5'";
}

$cadenawhere.=" OR listaprecios='Cliente general'";


include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('descargas');
//$xcrud->where('listaprecios =', 'Lista precios general');
$xcrud->where('', "$cadenawhere");
$xcrud->order_by('titulo','asc');

$xcrud->primary('iddescarga');

$xcrud->show_primary_ai_column(FALSE);

$xcrud->columns('archivo,titulo,descripcion, fecha');

$xcrud->table_name('Modulo de archivos para descargas');

$xcrud->change_type('archivo', 'file', '../../descargas', array('not_rename'=>true));
//Campos obligatorios
$xcrud->validation_required('archivo');
$xcrud->validation_required('titulo');
$xcrud->validation_required('descripcion');



$xcrud->change_type('listaprecios','select','Lista precios 1','Lista precios general, Lista precios 1,Lista precios 2,Lista precios 3,Lista precios 4, Lista precios 5');
$xcrud->label('listaprecios', 'Lista precios');
$xcrud->label('titulo', 'Títulos');
$xcrud->label('descripcion', 'Descripción');
//$xcrud->readonly('iddesarrollo, activo');
//$xcrud->pass_default('iddesarrollo',$_SESSION['iddesarrollo']);
//$xcrud->validation_pattern('correo', 'email');
//$xcrud->pass_var('iddesarrollo', );
$xcrud->unset_add();
$xcrud->unset_edit();
$xcrud->unset_view();
$xcrud->unset_remove();
$xcrud->unset_csv();
$xcrud->unset_print();
$xcrud->benchmark(true);

//$xcrud->relation('idsubsuperior','subdesarrollos','idsubdesarrollo','nombre','');
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
                    <h1 id="logo"><a href="../index.html"><img src="images/logo.png" alt=""></a></h1>
                    <p id="tagline"></p>
                </div>
                <!-- end header left -->
                
                <!-- begin header right -->
                <div class="one-half column-last">
                    
                     <div class="contact-info">
                        <p style="color:#f6b200; font-weight: bold;text-align: right">Bienvenido al panel de control para clientes</p>
                    </div>
                    <!-- begin contact info -->
                    <div class="contact-info" >
                    	 <p style="font-weight: bold;text-align: right; float: left">Empresa:</p>
                        <p style="float:right"><?=utf8_encode($_SESSION['empresa']);?></p>
                       
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