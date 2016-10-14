<?
$llave="3921797685254f042aeee8c6100035fe";
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

   <title>Todo en Suspensi&oacute;n</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="css/gumby.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
	
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
  
 
</head>

<style>
	
	

	.row {
		margin-bottom: 25px;
		text-align: center;
	}

	
	
	@media only screen and (max-width: 767px) {

		h1 {
			font: bold italic 100px georgia, times new roman, serif;
			-webkit-transition-duration: .5s;
		}

	}

	.header_logo_menu
	{
		background: #ffffff;
		color:#ffffff;
		height:112px;
	}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$( "#txtFechaFactura" ).datepicker({
		   changeYear: true,
		   numberOfMonths: 1,
		   dateFormat: 'yy-mm-dd'
		});
	});
	
	
	 function descargar(llave)
	  {
	  	    var tipoDocto=$("#tipoDocto").get(0).value;
	  	  //  var fecha = $('#txtFechaFactura').datepicker({ dateFormat: 'yy-mm-dd' }).val();
		  	var serie=$("#serie").get(0).value;
		  	var folio=$("#folio").get(0).value;
		  	//var serie='A';//$("#sucursal").get(0).value;
		  	
		  	if(serie=='A' || serie=='B' || serie=='C' || serie=='D' || serie=='E' || serie=='F' || serie=='a' || serie=='b' || serie=='c' || serie=='d' || serie=='e' || serie=='f')
		  	{
		  		var rfc="SBA980709V9A";
		  	}
		  	else if(serie=='W' || serie=='w')
		  	{
		  		var rfc="DIQG770824HV5";
		  	}
		  	else
		  	{
		  		var rfc="GAHE550106DEA";
		  	}
		  	
		  	if( serie=='' || serie==0 || folio=='' || folio==0)
		  	{
		  		$a=0;
		  	}
		  	else
		  	{
				window.open("https://138.122.96.43/xsamanager/downloadCfdWebView?serie="+serie+"&folio="+folio+"&tipo="+tipoDocto+"&rfc="+rfc+"&key="+llave+"");
			
			}
		  	
	  }
</script>
<style type="text/css">
	#sendEmail{
		font:normal 11px Tahoma, Geneva, sans-serif;
		color:#333;
		border:1px solid #999;
		background:#F9F9F9;
		width:500px;
		padding:20px;
		margin:0 auto
	}
	#sendEmail legend{
		color:#09F;
		font-size:15px
	}
	#sendEmail label{
		width:90px;
		float:left;
		text-align:left;
	}
	#sendEmail .row{
		overflow:hidden;
		margin:6px 0
	}
	#sendEmail  .button{
		background:#333;
		color:#FFF;
		width:180px;
		padding:5px 0;
		margin-top:20px;
		cursor:pointer
	}
	#loading{
		background:#F5F5F5;
		border-top:1px solid #F3F3F3;
		border-bottom:1px solid #F3F3F3;
		display:none;
		text-align:center;
		margin:6px 0;
		padding:5px 0
	}
	input, textarea{
		font:normal 11px Tahoma, Geneva, sans-serif;
		color:#000
	}
</style>
 
<body>

<div class="container" >
	<div class="row" style="background: #ffffff">
	  <!--Inicia el header-->	
      <div class="twelve columns ">
      	<div class="row">
			<div class="four columns header_logo_menu" style="width: 300px; height:107px; margin-top: 5px ">
		    	<a href="index.html"><img src='img/logo_azul.png' ></a>
		    </div>
			<div class="eight columns" >
				<!--Inicia el menu-->
				<div class="main clearfix">
					<nav id="menu" class="nav">					
						<ul>
							
							<li>
								<a href="empresa.html">
									<span class="icon">
										<i aria-hidden="true" class="icon-homes"></i>
									</span>
									<span>Empresa</span>
								</a>
							</li>
							
							<li>
								<a href="productos.php">
									<span class="icon"> 
										<i aria-hidden="true" class="icon-services"></i>
									</span>
									<span>Productos</span>
								</a>
							</li>
							<li>
								<a href="sucursales.html">
									<span class="icon">
										<i aria-hidden="true" class="icon-portfolio"></i>
									</span>
									<span>Sucursales</span>
								</a>
							</li>
							<li>
								<a href="contact.php">
									<span class="icon">
										<i aria-hidden="true" class="icon-blog"></i>
									</span>
									<span>Contacto</span>
								</a>
							</li>
							<li>
								<a href="novedades.php">
									<span class="icon">
										<i aria-hidden="true" class="icon-team"></i>
									</span>
									<span>Novedades</span>
								</a>
							</li>
							<li>
								<a href="bolsa.php">
									<span class="icon">
										<i aria-hidden="true" class="icon-contact"></i>
									</span>
									<span>Trabajo</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<!-- Termina el menu-->
				
			</div>
	    </div>
      </div>
      <!--Terminia el header -->
      <div class="row">
      <div class="twelve columns">
      	<h3 class="class_h3">Facturación</h3>
      </div>
      <!--
      <div class="twelve columns expansion_interna">
      	<iframe width="100%" height="272" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=d&amp;source=s_q&amp;hl=es&amp;geocode=%3BCQ6EdXS6NHPyFUEbOgEdekUE-imzcOmKzUTThTG6VVYwQDpQdw&amp;q=18+Jos%C3%A9+Siurob,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro,+M%C3%A9xico&amp;aq=&amp;sll=20.585174,-100.38325&amp;sspn=0.005725,0.009645&amp;ie=UTF8&amp;hq=&amp;hnear=Jos%C3%A9+Siurob+18,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro+de+Arteaga&amp;t=m&amp;daddr=Jos%C3%A9+Siurob+18,+zona+dos+extendida,+76040+Santiago+de+Quer%C3%A9taro,+QRO&amp;ll=20.585279,-100.383368&amp;spn=0.002812,0.003004&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?f=d&amp;source=embed&amp;hl=es&amp;geocode=%3BCQ6EdXS6NHPyFUEbOgEdekUE-imzcOmKzUTThTG6VVYwQDpQdw&amp;q=18+Jos%C3%A9+Siurob,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro,+M%C3%A9xico&amp;aq=&amp;sll=20.585174,-100.38325&amp;sspn=0.005725,0.009645&amp;ie=UTF8&amp;hq=&amp;hnear=Jos%C3%A9+Siurob+18,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro+de+Arteaga&amp;t=m&amp;daddr=Jos%C3%A9+Siurob+18,+zona+dos+extendida,+76040+Santiago+de+Quer%C3%A9taro,+QRO&amp;ll=20.585279,-100.383368&amp;spn=0.002812,0.003004" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                            	
      </div>
      -->
      <div class="twelve columns expansion_interna" style="padding-top: 10px">
      		<!--inicia Formulario de contacto-->
      		<div class="seven columns" >
      			<h5 style="text-align: left" class="class_h5">Descarga tu factura en PDF y/o XML</h5>
      			<form>
				    <input type="hidden" id="clave" name="clave" value="<?php echo $llave;?>">
		            <ul>
		            	<!--
		               <li class="field">
		              	<select class="text input" id='sucursal' name='sucursal' style="width:95%; float: left">
							<option value='A'>Querétaro</option>
							<option value='SJ'>San Juan del Río</option>
							<option value='SJP'>San Juan del Río Panamericana</option>
						</select>
		              </li>
		             
		              <li class="field"><input class="text input" type="text" placeholder="FECHA FACTURA" id="txtFechaFactura" name="txtFechaFactura" style="width:95%; float: left"/></li>
		             -->
		              <li class="field"><input class="text input" type="text" placeholder="SERIE" id="serie" name="serie" style="width:95%; float: left" maxlength="3"/></li>
		              <li class="field"><input class="text input" type="text" placeholder="FOLIO" id="folio" name="folio" style="width:95%; float: left"/></li>
		              
		              <li class="field">
		              	<select class="text input" id='tipoDocto' name='tipoDocto' style="width:95%; float: left">
							<option value='PDF'>PDF</option>
							<option value='XML'>XML</option>
						</select>
		              </li>
		              </ul>
		              <!--<div class="pretty medium warning btn" style="float: right;margin-right: 30px"><a href="#">Enviar</a></div>-->
		              <button type="button" class="pretty medium warning btn" style="float: right;margin-right: 30px;" onclick="descargar('<?php echo $llave;?>')"><strong style="margin-left: 15px;margin-right: 15px">Enviar</strong></button>
						   
		          	  <div id="loading" style="float:left;width:100%;text-align: center;margin:0 auto; color:#999999"></div>
	                      
		          </form>
      		</div>
      		<!--Terminia formulario de contacto -->
      		<div class="five columns expansion_interna" >
		    	<h5 style="text-align: left" class="class_h5">Matriz</h5>
		    	<p style="text-align: left; font-size: 14px" >
		    		Para descargar tu factura es necesario que cuentes con todos los datos que se solicitan.
		    	</p>
		    	
		    </div>
		    
		    <!-- -->
		    
		     <div class="twelve columns" style="margin-top: 30px; width: 100%; border-top:1px dotted #6a6a6a">
		     	<div class="six columns" style="float: left; margin-top: 15px">
		    		<img src="img/00-marcas.gif">
		    	</div>
		    	<div class="six columns" style="float: right; text-align: right">
		    		<div class="two columns">
			    		<p>&nbsp;</p>
			    	</div>
			      	<div class="two columns" style="float:left; margin-top: 15px">
			    		<a href="https://www.facebook.com/Suspensiones?fref=ts" target="_blank">
							<img src='img/foot02.jpg'>
						</a>
			    	</div>
			    	<div class="two columns" style="float:left; margin-top: 15px">
			    		<a href="https://twitter.com/suspbajio"  target="_blank">
							<img src='img/foot03.jpg'>
						</a>
			    	</div>
			    	<div class="five columns" style="float:right">
			    		<img src='img/foot04.jpg' style='width: 168px; height: 100px'>
			    	</div>
			    </div>
		     </div>
      </div>
      
      
    </div>
    </div>

</div>

  </body>
</html>
