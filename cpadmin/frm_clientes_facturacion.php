<?php
session_start ();
//print_r($_SESSION);
require 'funphp/db_connect.php';
$idcliente=$_SESSION['idcliente'];

$qry="SELECT rfc FROM clientes WHERE idcliente='$idcliente'";
$res = $db_object->getAll ( $qry );
$rfc = $res [0] ['rfc'];
	
$llave="3921797685254f042aeee8c6100035fe";
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
	
	<link rel="stylesheet" href="xcrud/themes/default/xcrud.css" type="text/css" charset="utf-8">
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
    
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- end JS -->
	<script>
	$(function() {
    	$( "#txtFechaInicio" ).datepicker({
		   showOn: 'both',
		   buttonImage: '../images/calendar.gif',
		   buttonImageOnly: true,
		   changeYear: false,
		   numberOfMonths: 1,
		   dateFormat: 'yy-mm-dd'
		});
		
		$( "#txtFechaFin" ).datepicker({
		   showOn: 'both',
		   buttonImage: '../images/calendar.gif',
		   buttonImageOnly: true,
		   changeYear: false,
		   numberOfMonths: 1,
		   dateFormat: 'yy-mm-dd'
		});
		
	  });
	  
	  
	  function descargar(rfc, llave)
	  {
	  	    
	  		var fechaInicio = $('#txtFechaInicio').datepicker({ dateFormat: 'yy-mm-dd' }).val();
		  	var fechaFin = $('#txtFechaFin').datepicker({ dateFormat: 'yy-mm-dd' }).val();
		  	var tipoDocto=$("#tipoDocto").get(0).value;
		  	
		  	if(fechaInicio=='' || fechaFin=='')
		  	{
		  		alert("Selecciona las fechas");
		  	}
		  	else
		  	{
		  		window.location="https://201.161.53.42/xsamanager/DownloadExpedidosBloqueServlet?key="+llave+"&rfcEmisor=SBA980709V9A&tipo="+tipoDocto+"&rfcReceptor="+rfc+"&fechaInicial="+fechaInicio+"&fechaFinal="+fechaFin+"";
		
		  	}
		  	
	  }
  </script>
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
                        <li><a href="frm_clientes_listas.php?listaprecios=<?=$listaprecios?>" >Descargas</a></li>
                        <li class="current"><a href="frm_clientes_facturacion.php" >Facturación</a></li>
                        
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
        	<div class="xcrud">
				<form id='formulario' name='formulario'>
					<div class="xcrud">
					<table width='100%' cellpadding="0" cellspacing="0" class="xcrud">
						<tr>
							<td><h2 class="xcrud-header">Descarga de Facturas</h2></td>
						</tr>
						<tr>
							<td align="left" class="xcrud xcrud-header xcrud-list" style="background: #f5f5f5">
								
									<table width='100%' border='0' align='left' cellpadding=0 cellspacing=0 class="xcrud-details">
										
										
									<!--INICIA EL FORMULARIO -->
									<tr>
										<td  align="center">
											
											<table align='center' border="0" width='100%' >
												
												<tr>
													<td style="border:0">&nbsp;</td>
												</tr>
												<tr id='TRFechaCompra'>
													<td class='xcrud-label'>RFC:</td>
													<td class='xcrud-details'><?=$rfc?></td>
												</tr>
												<tr id='TRFechaCompra'>
													<td class='xcrud-label'>Fecha inicio *</td>
													<td class='xcrud-details'><input type="text" id="txtFechaInicio" name='txtFechaInicio' size="30" style="width:150px" /></td>
												</tr>
												<tr id='TRFechaCompra'>
													<td class='xcrud-label'>Fecha fin *</td>
													<td class='xcrud-details'><input type="text" id="txtFechaFin" name='txtFechaFin' size="30" style="width:150px"/></td>
												</tr>
												<tr id='TRFechaCompra'>
													<td class='xcrud-label'>Tipo Documento *</td>
													<td class='xcrud-details'>
														<select id='tipoDocto' name='tipoDocto' style="width:200px">
															<option value='PDF,XML'>AMBOS PDF y XML</option>
															<option value='PDF'>PDF</option>
															<option value='XML'>XML</option>
														</select>
													</td>
												</tr>
												
												<tr>
													<td>&nbsp;</td>
												</tr>
												<tr>
													<td colspan="2" align="center">
														
														<input type="button" value="Descargar" style="font-size: 12px; padding: 10px" onclick="descargar('<?=$rfc?>','<?=$llave?>')">
													</td>
												</tr>
												
											</table>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
								</table>
								</div>
							</td>
						</tr>
						
						
					</table>
				</form>
				</div>
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