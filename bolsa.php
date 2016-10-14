<?php

require 'funphp/db_connect.php';

$qry = "SELECT * FROM bolsatrabajo WHERE vigente=1";
$res3 = $db_object->query ( $qry );
if ($res3) 
{
	while ( $row3 = $res3->fetchRow () ) 
	{
		$puesto = $row3 ["puesto"];
		//echo "<br>".$puesto;
	}
}

?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> 
	 <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
  <link rel="stylesheet" type="text/css" href="css/component.css" />
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
		background: #095b9a;
		color:#ffffff;
		height:112px;
	}
</style>

 <!--  <script src="js/libs/modernizr-2.6.2.min.js"></script>-->
   <script src="js/modernizr.custom.js"></script>
  
   <script>
  	function mostrar_info_suspension(divmostrar)
		{
			
			$("#btn_1").removeClass("btn-sample active");
			$("#btn_2").removeClass("btn-sample active");
			$("#btn_3").removeClass("btn-sample active");
			$("#btn_4").removeClass("btn-sample active");
			$("#btn_5").removeClass("btn-sample active");
			
			$("#btn_1").addClass("btn-sample");
			$("#btn_2").addClass("btn-sample");
			$("#btn_3").addClass("btn-sample");
			$("#btn_4").addClass("btn-sample");
			$("#btn_5").addClass("btn-sample");
			//$("divSuspenion3").removeClass("myClass noClass")
			
			$("#divSuspenion1").css("display", "none");
			$("#divSuspenion2").css("display", "none");
			$("#divSuspenion3").css("display", "none");
			$("#divSuspenion4").css("display", "none");
			$("#divSuspenion5").css("display", "none");
			
			
			
			if(divmostrar==1)
			{
				$("#divSuspenion1").css("display", "block");
				$("#btn_1").addClass("btn-sample active");
			}
			else if(divmostrar==2)
			{
				$("#divSuspenion2").css("display", "block");
				$("#btn_2").addClass("btn-sample active");
			}
			else if(divmostrar==3)
			{
				$("#divSuspenion3").css("display", "block");
				$("#btn_3").addClass("btn-sample active");
			}
			else if(divmostrar==4)
			{
				$("#divSuspenion4").css("display", "block");
				$("#btn_4").addClass("btn-sample active");
			}
			else if(divmostrar==5)
			{
				$("#divSuspenion5").css("display", "block");
				$("#btn_5").addClass("btn-sample active");
			}
			
		}
  </script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#emailForm').ajaxForm({
			beforeSubmit: validate,
			success: function(data, statusText, xhr, form) {
				$('#loading').html('El email se envio correctamente');
				alert("El email se envio correctamente");
				$('#loading').hide();
				$("#nombre").val("");
				$("#email").val("");
				$("#puesto").val("");
				$("#comentarios").val("");
				$("#adjunto").val("");
			}
		});
		
		function validate(formData, jqForm, options) {
			var form = jqForm[0]; 
			if(form.nombre.value == ""){
				alert("Ingrese tu nombre");
				form.nombre.focus();
				return false;
			}else if(form.email.value == ""){
				alert("Ingrese tu email ");
				form.email.focus();
				return false;
			}else if(form.puesto.value == ""){
				alert("Selecciona el puesto");
				form.puesto.focus();
				return false;
			}
			
			$('#loading').html('Enviando...').show();
		}
	});
	
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
 
 <!--Archivos para acordeon-->
  	<link rel="stylesheet" type="text/css" href="css/style_acordeon.css" />
	<!--<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>-->
 
</head>



<body>

<div class="container" >
	<div class="row" style="background: #ffffff">
	  <!--Inicia el header-->	
      <div class="twelve columns">
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
	      
      
      
	      <div class="twelve columns expansion_interna" style="padding-top: 10px">
	      		<!--inicia Formulario de contacto-->
	      		
		    	<div class="twelve columns">
				      	<h4 class="class_h3" style="padding-left: 20px">Nuestra bolsa de trabajo</h4>
				    </div>
		      	<div class="six columns" id='divSuspenion1'>
		      		
		      		
		      		<section class="ac-container" >
		      			<?
                                	$c=0;
                                	$qry = "SELECT * FROM bolsatrabajo WHERE vigente=1";
									$res3 = $db_object->query ( $qry );
									if ($res3) 
									{
										while ( $row3 = $res3->fetchRow () ) 
										{
											$puesto =utf8_encode($row3 ["puesto"]);
											$escolaridad = utf8_encode($row3 ["escolarida"]);
											$sueldo = $row3 ["sueldo"];
											$ubicacion = utf8_encode($row3 ["ubicacion"]);
											$tipocontrato = utf8_encode($row3 ["tipocontrato"]);
											$fechapublicacion = $row3 ["fechapublicacion"];
											$requisitos = utf8_encode($row3 ["requisitos"]);
											//echo "<br>".$puesto;
											echo '
											<div>
												<input id="ac-'.$c.'" name="accordion-1" type="radio" />
												<label for="ac-'.$c.'" >'.$puesto.'</label>
												
												<article class="ac-medium" style="padding-top:20px">
													<ul class="square" style="list-style-type:none">
		                                            	<li style="font-size:14px; "><span style="color:#095b9a">Puesto: </span>'.$puesto.'</li>
		                                            	<li style="font-size:14px"><span style="color:#095b9a">Escolaridad: </span>'.$escolaridad.'</li>
		                                                <li style="font-size:14px"><span style="color:#095b9a">Sueldo: </span> $'.$sueldo.'</li>
		                                                <li style="font-size:14px"><span style="color:#095b9a">Ubicación: </span>'.$ubicacion.'</li>
		                                                <li style="font-size:14px"><span style="color:#095b9a">Tipo contrato: </span>'.$tipocontrato.'</li>
		                                                <li style="font-size:14px"><span style="color:#095b9a">Fecha publicación: </span>'.$fechapublicacion.'</li>
		                                                <li style="font-size:14px"><span style="color:#095b9a">Requisitos: </span>
		                                                    
		                                                       			'.$requisitos.'
		                                                    
		                                                </li>
		                                        	</ul>
												</article>
											</div>
											';
											
											$c++;
										}
									}

									if($c==0)
									{
										echo '
										<div>
										En este momento no contamos con vacantes para empleo, favor de consultar mas adelante.
										</div>';
									}
                                	?>
		      			
		      			
		      			
					</section>
		      		
		      		<!--Termina acordeon -->
		      	</div>
	      		
	      		<div class="six columns">
		    		
                    <div class="content_widget">
                    	<h5 class="class_h3" style="width:100%; text-align: left; padding-bottom:20px ">¿ Te interesa alguna oferta ?</h5>
                        <p style="font-size: 14px; text-align: left; ">
                        	Dejanos tus datos y tu CV, si cubres el perfil que buscamos nos pondremos en contacto contigo para agendar un entrevista.
                        </p>
                        <form name="emailForm" id="emailForm" method="POST" action="enviar.php"  enctype="multipart/form-data">
				        	<ul>
				              	<li class="field"><input class="text input" type="text" placeholder="Nombre" id="nombre" name="nombre" style="width:95%; float: left"/></li>
				              	<li class="field"><input class="email input" type="email" placeholder="Email" id="email" name="email" style="width:95%; float: left"/></li>
				              	<li class="field">
                					<div class="picker" style="width:95%; float: left">
					              		<select id='puesto' name="puesto" class="field" style="width:95%; float: left">
			                            	<option value="0">Selecciona el puesto</option>
			                            	<?
			                                	$qry = "SELECT * FROM bolsatrabajo ";//WHERE vigente=1";
												$res3 = $db_object->query ( $qry );
									
												while ( $row3 = $res3->fetchRow () ) 
												{
													$puesto = $row3 ["puesto"];
													echo "<option value='$puesto'>".utf8_encode($puesto)."</option>";
												}
			                                ?>
		                            	</select>
		                        	</div>
	                            </li>
				              	<li class="field"><textarea class="input textarea" placeholder="Comentarios" id="comentarios" name="comentarios" rows="5" style="width:95%; float: left"></textarea></li>
				            	<li class="field">
				            		<input type="file" id="adjunto" name="adjunto" style=" color:black; font-size: 12px" value=''>
				            	</li>
				            </ul>
				            
				            <button type="reset" class="pretty medium warning btn" style="float: right;margin-right: 30px"><strong style="margin-left: 15px;margin-right: 15px">Limpiar</strong></button>
	                        
				            <button type="submit" class="pretty medium warning btn" style="float: right;margin-right: 30px;"><strong style="margin-left: 15px;margin-right: 15px">Enviar</strong></button>
						    <div id="loading" style="float:left;width:100%;text-align: center;margin:0 auto; color:#999999"></div>
	                      
				            
				          	
				          </form>
                	</div>
		    	</div>
			     
			    <div class="twelve columns" style="margin-top: 30px; width: 100%; border-top:1px dotted #6a6a6a">
			     	<div class="six columns" style="float: left; margin-top: 15px">
			    		<img src="img/00-marcas.gif">
			    	</div>
			    	<div class="six columns" style="float: right; text-align: right">
			    		
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
				    	<li class="four columns" style="padding-top: 30px; font-size: 13px; list-style-type: none; font-weight: bold">
							<a href="AVISODEPRIVACIDAD.pdf" target="_blank"  style=" color:#004987">Aviso de privacidad</a>
						</li>
						<li class="four columns" style="padding-top: 30px; font-size: 14px; list-style-type: none; font-weight: bold">
						<a href="facturacion.php" style=" color:#004987">Facturaci&oacute;n</a>
						</li>
				    </div>
			     </div>
			     
			    
			   
	      </div>
      
	     
    </div>
    </div>

</div>

  </body>
</html>
