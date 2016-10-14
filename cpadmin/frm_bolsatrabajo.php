<?
session_start ();
require 'funphp/db_connect.php';
$idperfil=$_SESSION['idperfil'];

$qry="SELECT perfil FROM perfilesusuarios WHERE idperfil='$idperfil'";
$res = $db_object->getAll ( $qry );
$perfil = utf8_encode($res [0] ['perfil']);

include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('bolsatrabajo');
$xcrud->primary('idbolsatrabajo');
$xcrud->columns('puesto,escolarida, ubicacion, fechapublicacion, vigente');
$xcrud->order_by('idbolsatrabajo','asc');
$xcrud->table_name('Modulo de Bolsa de Trabajo');

//Campos obligatorios
$xcrud->validation_required('puesto');
$xcrud->validation_required('requisitos');
$xcrud->validation_required('fechapublicacion');
//$xcrud->validation_required('password');
//$xcrud->validation_required('listaprecios');

$xcrud->label('ubicacion', 'Ubicación');
$xcrud->label('tipocontrato', 'Tipo Contrato');
$xcrud->label('fechapublicacion', 'Fecha publicación');

//$xcrud->tinymce_folder_url('../../tiny_mce');
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
		<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
	tinyMCE.init({
	        // General options
	        mode : "textareas",
	        theme : "advanced",
	        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	
	        // Theme options
	        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
	        theme_advanced_toolbar_location : "top",
	        theme_advanced_toolbar_align : "left",
	        theme_advanced_statusbar_location : "bottom",
	        theme_advanced_resizing : true,
	
	        // Skin options
	        skin : "o2k7",
	        skin_variant : "silver",
	
	        // Example content CSS (should be your site CSS)
	        content_css : "css/example.css",
	
	        // Drop lists for link/image/media/template dialogs
	        template_external_list_url : "js/template_list.js",
	        external_link_list_url : "js/link_list.js",
	        external_image_list_url : "js/image_list.js",
	        media_external_list_url : "js/media_list.js",
	
	        // Replace values for the template plugin
	        template_replace_values : {
	                username : "Some User",
	                staffid : "991234"
	        }
	});
	</script>
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