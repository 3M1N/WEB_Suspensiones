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
		background: #095b9a;
		color:#ffffff;
		height:112px;
	}
</style>

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
	      		<div class="four columns">
		    		<p class="skiplink medium secondary pretty" style="float:left; width: 95%; height: 56px; line-height:18px;"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60" style="padding-top: 15px" onclick="mostrar_info_suspension('1')">Suspensión de eje rígido</a></p>
               		<p class="skiplink medium secondary pretty" style="float:left; width: 95%; height: 56px; line-height:18px;"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60" style="padding-top: 10px" onclick="mostrar_info_suspension('2')">Suspensión de brazos tirados o arrastrados</a></p>
               		<p class="skiplink medium secondary pretty" style="float:left; width: 95%; height: 56px; line-height:18px;"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60" style="padding-top: 15px" onclick="mostrar_info_suspension('3')">Suspensión McPherson</a></p>
               		<p class="skiplink medium secondary pretty" style="float:left; width: 95%; height: 56px; line-height:18px;"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60" style="padding-top: 10px" onclick="mostrar_info_suspension('4')">Suspensión de paralelogramo convencional</a></p>
               		<p class="skiplink medium secondary pretty" style="float:left; width: 95%; height: 56px; line-height:18px;"><a href="#" gumby-goto="#skiplink_1" gumby-offset="-60" style="padding-top: 10px" onclick="mostrar_info_suspension('5')">Suspensiones Multilink (Multibrazo)</a></p>
               </div>
		    	
		      	<div class="eight columns" id='divSuspenion1'>
		      		<div class="twelve columns">
				      	<h4 class="class_h3">Suspensión de eje rígido</h4>
				    </div>
				    
		      		<p style="font-size: 14px; text-align: left; padding-left: 20px; margin-top: 60px;">
                    	Esta suspensión tiene unidas las ruedas mediante un eje rígido formando un conjunto. Presenta el inconveniente de que al estar unidas ambas ruedas, las vibraciones producidas por la acción de las irregularidades del pavimento, se transmiten de un lado al otro del eje. Como principal ventaja, los ejes rígidos destacan por su sencillez de diseño y no producen variaciones significativas en los parámetros de la rueda como caída, avance, etc. El principal uso de esta disposición de suspensión se realiza sobre todo en vehículos industriales, autobuses, camiones y vehículos todo terreno. 
	               	</p>
	               	<img src="img/productos001.jpg">
	               	<p style="font-size: 10px; text-align: left; padding-left: 20px">
	               		<br>
                    	En la Figura anterior se muestra un modelo de eje rígido actuando de eje propulsor. En estos casos el eje está constituido por una caja que contiene el mecanismo diferencial (1) y por los tubos (3) que contienen los palieres. El eje rígido en este caso se apoya contra el bastidor mediante ballestas (2) que hacen de elemento elástico transmitiendo las oscilaciones. Completan el conjunto los amortiguadores (4).
	                </p>
		      	</div>
	      		
			     <div class="eight columns" style="display:none" id='divSuspenion2' >
			     	<div class="twelve columns">
				      	<h4 class="class_h3">Suspensión de brazos tirados o arrastrados</h4>
				    </div>
		      		<p style="font-size: 14px; text-align: left; padding-left: 20px;  margin-top: 60px;">
                    	Este tipo de suspensión independiente se caracteriza por tener dos elementos soporte o "brazos" en disposición longitudinal que van unidos por un extremo al bastidor y por el otro al mango de la rueda. Si el eje es de tracción, el grupo diferencial va anclado al bastidor. En cualquier caso las ruedas son tiradas o arrastradas por los brazos longitudinales que pivotan en el anclaje de la carrocería.
                    </p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                    	Este sistema de suspensión ha dado un gran número de variantes cuyas diferencias estriban fundamentalmente en cuál es el eje de giro del brazo tirado en el anclaje al bastidor y cuál es el elemento elástico que utiliza.
                    </p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                    	Este tipo de suspensión apenas produce variaciones de vía, caída o avance de la rueda. En la figura de la izquierda pivotan los brazos sobre ejes que tienen componentes longitudinales. A esta última variante también se la conoce como "brazos semi-arrastrados" y tiene la ventaja de que no precisa estabilizadores longitudinales debido a la componente longitudinal que tiene el propio brazo o soporte. Aquí las variaciones de caída y de vía dependen de la posición e inclinación de los brazos longitudinales por lo tanto, permite que se varíe durante la marcha la caída y el avance de las ruedas con lo que se mejora la estabilidad del vehículo. En cuanto al tipo de elementos elásticos que se utilizan en estas suspensiones, se encuentran las barras de torsión y los muelles.
                    </p>
                    
                    <img src="img/productos002.jpg">
                    
                    <p style="font-size: 10px; text-align: left; padding-left: 20px; margin-top: 0px">
	               		<br>
                    	En la Figura se muestra la comparación entre suspensión de brazo semi-arrastrado y brazo arrastrado.
	                </p>
                     <p style="font-size: 14px; text-align: left; padding-left: 20px">
                     	Sistemas de suspensión de brazos tirados con barras de torsión. Las barras se montan de manera transversal a la carrocería. Como mínimo se utilizan dos, pudiendo llegar incluso a montar cuatro en un mismo  vehículo.
                     </p>
                   
			     </div>
			     
			     
			     
			     <div class="eight columns" style="display:none" id='divSuspenion3' >
			     	<div class="twelve columns">
				      	<h4 class="class_h3">Suspensión McPherson</h4>
				    </div>
		      		<p style="font-size: 14px; text-align: left; padding-left: 20px;  margin-top: 60px;">
                    	Esta suspensión fue desarrollada por Earle S. McPherson, ingeniero de Ford del cual recibe su nombre. Este sistema es uno de los más utilizados en el tren delantero aunque se puede montar igualmente en el trasero. Este sistema ha tenido mucho éxito, sobre todo en vehículos más modestos, por su sencillez de fabricación y mantenimiento, el coste de producción y el poco espacio que ocupa. 
	                </p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                   		Con esta suspensión es imprescindible que la carrocería sea más resistente en los puntos donde se fijan los amortiguadores y muelles, con objeto de absorber los esfuerzos transmitidos por la suspensión.
                   	</p>
                   	
                   	<img src="img/productos003.jpg">
                   	<p style="font-size: 10px; text-align: left; padding-left: 20px; text-align: center">
	               		En la Figura se muestra la estructura de suspensión McPherson
	                </p>
	                
	                	<img src="img/productos004.jpg">
                   	<p style="font-size: 10px; text-align: left; padding-left: 20px;">
	               		En la Figura se muestra un modelo detallado de una suspensión McPherson con brazo inferior y barra estabilizadora
	                </p>
	                
                    <p style="font-size: 14px; text-align: left; padding-left: 20px;  margin-top: 20px;">
                    	La suspensión tipo McPherson forma un mecanismo de tipo triángulo articulado formado por el brazo inferior, el conjunto muelle-amortiguador y el propio chasis. El lado del triángulo que corresponde al muelle-amortiguador es de compresión libre por lo que sólo tiene un único grado de libertad: la tracción o compresión de los elementos elásticos y amortiguador. Al transmitirse a través del muelle-amortiguador todos los esfuerzos al chasis es necesario un dimensionado más rígido de la carrocería en la zona de apoyo de la placa de fijación.
                    </p>
                     <p style="font-size: 14px; text-align: left; padding-left: 20px">
                     Como elementos complementarios a esta suspensión se encuentra la barra estabilizadora  unida al brazo inferior mediante un tornillo  y gomas de la barra.
                     </p>
                   
			     </div>
			     
			     <div class="eight columns" style="display:none" id='divSuspenion4' >
			     	<div class="twelve columns">
				      	<h4 class="class_h3">Suspensión de paralelogramo convencional</h4>
				    </div>
		      		<p style="font-size: 14px; text-align: left; padding-left: 20px;  margin-top: 60px;">
		      			
                    	La suspensión de paralelogramo convencional junto con la McPherson son las más utilizadas en un gran número de automóviles tanto para el eje delantero y algunos casos en el eje trasero. Esta suspensión también se denomina: suspensión por trapecio articulado y suspensión de triángulos.
                    </p>
                    <img src="img/productos005.jpg">
                    <p style="font-size: 10px; text-align: left; padding-left: 20px">
                    	<br>
                   		En la Figura anterior se muestra una suspensión convencional de paralelogramo. El paralelogramo está formado por un brazo superior (2) y otro inferior (1) que están unidos al chasis a través de unos pivotes, cerrando el paralelogramo a un lado el propio chasis y al otro lado por el mango (mangueta) (7) de la rueda. El mango está articulado con los brazos mediante rótulas (4) que permiten la orientación de la rueda. Los elementos elásticos y amortiguador (5) son de tipo resorte helicoidal y están unidos por su parte inferior al brazo inferior y por su parte superior al bastidor. Completan el sistema unos topes (6) que evitan que el brazo inferior suba lo suficiente como para sobrepasar el límite elástico del muelle y una barra estabilizadora (8) que va anclado al brazo inferior (1).
                   	</p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                   	La evolución de estos sistemas de suspensión de paralelogramo deformable ha llegado hasta las actuales suspensiones llamadas multilink (multibrazo).
                   	</p>
                   
			     </div>
			     
			     
			     <div class="eight columns" style="display:none" id='divSuspenion5' >
			     	<div class="twelve columns">
				      	<h4 class="class_h3">Suspensiones Multilink (Multibrazo)</h4>
				    </div>
		      		<p style="font-size: 14px; text-align: left; padding-left: 20px;  margin-top: 60px;">
		      		Las suspensiones multibrazo se basan en el mismo concepto básico que sus precursoras las suspensiones de paralelogramo convencional, es decir, el paralelogramo está formado por dos brazos transversales, el mango de la rueda y el propio bastidor. La diferencia fundamental es que los elementos guía de la suspensión multibrazo pueden tener anclajes elásticos mediante manguitos de goma. Las multibrazo permiten modificar tanto los parámetros fundamentales de la rueda, como la caída o la convergencia, de la forma más apropiada de cara a la estabilidad en las distintas situaciones de uso del automóvil. Para que una suspensión se considere multibrazo debe estar formada al menos por tres brazos.	
                    </p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                    	<br>
                   	Las suspensiones multibrazo se pueden clasificar en dos grupos fundamentales:
                   	</p>
                    <p style="font-size: 14px; text-align: left; padding-left: 20px">
                   	1. Suspensiones multibrazo con elementos de guía transversales u oblicuos con funcionamiento similar al de las suspensiones de paralelogramo deformable.
                   	</p>
                   	<p style="font-size: 14px; text-align: left; padding-left: 20px">
                   	2. Suspensiones multibrazo que además disponen de brazos de guía longitudinal con un funcionamiento que recuerda a los sistemas de suspensión de ruedas tiradas por brazos longitudinales
                   	</p>
                   	<img src="img/productos006.jpg">
			     </div>
			    
			    <!-- -->
			    
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
<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}
		</script>
  	<!--
  	<div class="row">
      <div class="twelve columns">
      	<p>940px</p>
      </div>
    </div>

    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
      <div class="eleven columns">
      	<p>860px</p>
      </div>
    </div>

    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    </div>

    <div class="row">
    	<div class="two columns">
    		<p>140px</p>
    	</div>
      <div class="ten columns">
      	<p>780px</p>
      </div>
    </div>

    <div class="row">
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    	<div class="two columns">
    		<p>140px</p>
    	</div>
    </div>

    <div class="row">
    	<div class="three columns">
    		<p>220px</p>
    	</div>
      <div class="nine columns">
      	<p>700px</p>
      </div>
    </div>

    <div class="row">
    	<div class="three columns">
    		<p>220px</p>
    	</div>
    	<div class="three columns">
    		<p>220px</p>
    	</div>
    	<div class="three columns">
    		<p>220px</p>
    	</div>
    	<div class="three columns">
    		<p>220px</p>
    	</div>
    </div>

    <div class="row">
    	<div class="four columns">
    		<p>300px</p>
    	</div>
      <div class="eight columns">
      	<p>620px</p>
      </div>
    </div>

    <div class="row">
    	<div class="four columns">
    		<p>300px</p>
    	</div>
    	<div class="four columns">
    		<p>300px</p>
    	</div>
    	<div class="four columns">
    		<p>300px</p>
    	</div>
    </div>

    <div class="row">
    	<div class="five columns">
    		<p>380px</p>
    	</div>
      <div class="seven columns">
      	<p>540px</p>
      </div>
    </div>

    <div class="row">
    	<div class="six columns">
    		<p>460px</p>
    	</div>
      <div class="six columns">
      	<p>460px</p>
      </div>
    </div>

    

    <div class="row">
    	<div class="twelve columns special">
    		<p>Columns pushed right by 'x'</p>
    	</div>
    </div>
    <div class="row">
    	<div class="eleven columns push_one">
    		<p>11 Columns Push 1</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="ten columns push_one">
    		<p>10 Columns Push 1</p>
    	</div>
    </div>
    <div class="row">
    	<div class="ten columns push_two">
    		<p>10 Columns Push 2</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="nine columns push_two">
    		<p>9 Columns Push 2</p>
    	</div>
    </div>
    <div class="row">
    	<div class="nine columns push_three">
    		<p>9 Columns Push 3</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="eight columns push_three">
    		<p>8 Columns Push 3</p>
    	</div>
    </div>
    <div class="row">
    	<div class="eight columns push_four">
    		<p>8 Columns Push 4</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="seven columns push_four">
    		<p>7 Columns Push 4</p>
    	</div>
    </div>
    <div class="row">
    	<div class="seven columns push_five">
    		<p>7 Columns Push 5</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="six columns push_five">
    		<p>6 Columns Push 5</p>
    	</div>
    </div>
    <div class="row">
    	<div class="six columns push_six">
    		<p>6 Columns Push 6</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="five columns push_six">
    		<p>5 Columns Push 6</p>
    	</div>
    </div>
    <div class="row">
    	<div class="five columns push_seven">
    		<p>5 Columns Push 7</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="four columns push_seven">
    		<p>4 Columns Push 7</p>
    	</div>
    </div>

    <div class="row">
    	<div class="four columns push_eight">
    		<p>4 Columns Push 8</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="three columns push_eight">
    		<p>3 Col Push 8</p>
    	</div>
    </div>

    <div class="row">
    	<div class="three columns push_nine">
    		<p>3 Col Push 9</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="two columns push_nine">
    		<p>2 - Push 9</p>
    	</div>
    </div>


    <div class="row">
    	<div class="two columns push_ten">
    		<p>2 - Push 10</p>
    	</div>
    </div>
    <div class="row">
    	<div class="one columns">
    		<p>60px</p>
    	</div>
    	<div class="one columns push_ten">
    		<p>60px</p>
    	</div>
    </div>


    <div class="row">
    	<div class="one columns push_eleven">
    		<p>60px</p>
    	</div>
    </div>

   
    <div class="row">
    	<div class="twelve columns special">
    		<p>Centered Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="eleven columns centered">
    		<p>11 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="ten columns centered">
    		<p>10 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="nine columns centered">
    		<p>9 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="eight columns centered">
    		<p>8 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="seven columns centered">
    		<p>7 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="six columns centered">
    		<p>6 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="five columns centered">
    		<p>5 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="four columns centered">
    		<p>4 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="three columns centered">
    		<p>3 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="two columns centered">
    		<p>2 Columns</p>
    	</div>
    </div>

    <div class="row">
    	<div class="one columns centered">
    		<p>1 Col</p>
    	</div>
    </div>

  </div> <!--! end of #container -->



  <!--
  <section class="sixteen colgrid">


  	<div class="container">

  		<div class="row">
  		  <div class="sixteen columns special">
  		  	<p>Responsive 16 Column Grid</p>
  		  </div>
  		</div>

    	<div class="row">
  	    <div class="sixteen columns">
  	    	<p>940px</p>
  	    </div>
      </div>

      <div class="row">
      	<div class="one columns">
      		<p>40</p>
      	</div>
        <div class="fifteen columns">
        	<p>880px</p>
        </div>
      </div>

      <div class="row">
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
      	<div class="one columns">
      		<p>40</p>
      	</div>
        <div class="one columns">
        	<p>40</p>
        </div>
        <div class="one columns">
          <p>40</p>
        </div>
        <div class="one columns">
          <p>40</p>
        </div>
        <div class="one columns">
          <p>40</p>
        </div>
        <div class="one columns">
          <p>40</p>
        </div>
      </div>

      <div class="row">
      	<div class="two columns">
      		<p>100px</p>
      	</div>
        <div class="fourteen columns">
        	<p>820px</p>
        </div>
      </div>

      <div class="row">
      	<div class="two columns">
      		<p>100px</p>
      	</div>
      	<div class="two columns">
      		<p>100px</p>
      	</div>
      	<div class="two columns">
      		<p>100px</p>
      	</div>
      	<div class="two columns">
      		<p>100px</p>
      	</div>
      	<div class="two columns">
      		<p>100px</p>
      	</div>
        <div class="two columns">
          <p>100px</p>
        </div>
        <div class="two columns">
          <p>100px</p>
        </div>
        <div class="two columns">
          <p>100px</p>
        </div>
      </div>

      <div class="row">
      	<div class="three columns">
      		<p>160px</p>
      	</div>
        <div class="thirteen columns">
        	<p>760px</p>
        </div>
      </div>

      <div class="row">
      	<div class="three columns">
      		<p>160px</p>
      	</div>
      	<div class="three columns">
      		<p>160px</p>
      	</div>
      	<div class="four columns">
      		<p>220px</p>
      	</div>
      	<div class="three columns">
      		<p>160px</p>
      	</div>
      	<div class="three columns">
      		<p>160px</p>
      	</div>
      </div>

      <div class="row">
      	<div class="four columns">
      		<p>220px</p>
      	</div>
        <div class="twelve columns">
        	<p>700px</p>
        </div>
      </div>

      <div class="row">
      	<div class="four columns">
      		<p>220px</p>
      	</div>
      	<div class="four columns">
      		<p>220px</p>
      	</div>
        <div class="four columns">
          <p>220px</p>
        </div>
        <div class="four columns">
          <p>220px</p>
        </div>
      </div>

      <div class="row">
      	<div class="five columns">
      		<p>280px</p>
      	</div>
        <div class="eleven columns">
        	<p>640px</p>
        </div>
      </div>

      <div class="row">
      	<div class="five columns">
      		<p>280px</p>
      	</div>
        <div class="six columns">
        	<p>340px</p>
        </div>
        <div class="five columns">
        	<p>280px</p>
        </div>
      </div>

      <div class="row">
      	<div class="six columns">
      		<p>340px</p>
      	</div>
        <div class="ten columns">
        	<p>580px</p>
        </div>
      </div>

      <div class="row">
      	<div class="six columns">
      		<p>340px</p>
      	</div>
      	<div class="four columns">
      	  <p>220px</p>
      	</div>
      	<div class="six columns">
      		<p>340px</p>
      	</div>
      </div>

      <div class="row">
      	<div class="seven columns">
      		<p>400px</p>
      	</div>
        <div class="nine columns">
        	<p>520px</p>
        </div>
      </div>

      <div class="row">
      	<div class="seven columns">
      		<p>400px</p>
      	</div>
      	<div class="two columns">
      		<p>100px</p>
      	</div>
      	<div class="seven columns">
      		<p>400px</p>
      	</div>
      </div>

      <div class="row">
      	<div class="eight columns">
      		<p>460px</p>
      	</div>
        <div class="eight columns">
        	<p>460px</p>
        </div>
      </div>

       <div class="row">
      	<div class="sixteen columns special">
      		<p>Columns pushed right by 'x'</p>
      	</div>
      </div>
      <div class="row">
          <div class="fifteen columns push_one">
              <p>15 Columns Push 1</p>
          </div>
      </div>
      <div class="row">
          <div class="one columns">
              <p>40px</p>
          </div>
          <div class="fourteen columns push_one">
              <p>14 Columns Push 1</p>
          </div>
      </div>
      <div class="row">
          <div class="fourteen columns push_two">
              <p>14 Columns Push 2</p>
          </div>
      </div>
      <div class="row">
          <div class="one columns">
              <p>40px</p>
          </div>
          <div class="thirteen columns push_two">
              <p>13 Columns Push 2</p>
          </div>
      </div>
      <div class="row">
          <div class="thirteen columns push_three">
              <p>13 Columns Push 3</p>
          </div>
      </div>
      <div class="row">
          <div class="one columns">
              <p>40px</p>
          </div>
          <div class="twelve columns push_three">
              <p>12 Columns Push 3</p>
          </div>
      </div>
      <div class="row">
          <div class="twelve columns push_four">
              <p>12 Columns Push 4</p>
          </div>
      </div>
      <div class="row">
          <div class="one columns">
              <p>40px</p>
          </div>
          <div class="eleven columns push_four">
              <p>11 Columns Push 4</p>
          </div>
      </div>
      <div class="row">
          <div class="eleven columns push_five">
              <p>11 Columns Push 5</p>
          </div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="ten columns push_five">
      		<p>10 Columns Push 5</p>
      	</div>
      </div>
      <div class="row">
      	<div class="ten columns push_six">
      		<p>10 Columns Push 6</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="nine columns push_six">
      		<p>9 Columns Push 6</p>
      	</div>
      </div>
      <div class="row">
      	<div class="nine columns push_seven">
      		<p>9 Columns Push 7</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="eight columns push_seven">
      		<p>8 Columns Push 7</p>
      	</div>
      </div>
      <div class="row">
      	<div class="eight columns push_eight">
      		<p>8 Columns Push 8</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="seven columns push_eight">
      		<p>7 Columns Push 8</p>
      	</div>
      </div>
      <div class="row">
      	<div class="seven columns push_nine">
      		<p>7 Columns Push 9</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="six columns push_nine">
      		<p>6 Columns Push 9</p>
      	</div>
      </div>
      <div class="row">
      	<div class="six columns push_ten">
      		<p>6 Columns Push 10</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="five columns push_ten">
      		<p>5 Columns Push 10</p>
      	</div>
      </div>
      <div class="row">
      	<div class="five columns push_eleven">
      		<p>5 Columns Push 11</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="four columns push_eleven">
      		<p>4 Columns Push 11</p>
      	</div>
      </div>

      <div class="row">
      	<div class="four columns push_twelve">
      		<p>4 Columns Push 12</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="three columns push_twelve">
      		<p>3 Col Push 12</p>
      	</div>
      </div>

      <div class="row">
      	<div class="three columns push_thirteen">
      		<p>3 Col Push 13</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="two columns push_thirteen">
      		<p>2 - Push 12</p>
      	</div>
      </div>
      <div class="row">
      	<div class="two columns push_fourteen">
      		<p>2 - Push 14</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns">
      		<p>40px</p>
      	</div>
      	<div class="one columns push_fourteen">
      		<p>40px</p>
      	</div>
      </div>
      <div class="row">
      	<div class="one columns push_fifteen">
      		<p>40px</p>
      	</div>
      </div>


    
      <div class="row">
      	<div class="sixteen columns special">
      		<p>Centered Columns</p>
      	</div>
      </div>

      <div class="row">
        <div class="fifteen columns centered">
          <p>15 Columns</p>
        </div>
      </div>

      <div class="row">
        <div class="fourteen columns centered">
          <p>14 Columns</p>
        </div>
      </div>

      <div class="row">
        <div class="thirteen columns centered">
          <p>13 Columns</p>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns centered">
          <p>12 Columns</p>
        </div>
      </div>

      <div class="row">
        <div class="eleven columns centered">
          <p>11 Columns</p>
        </div>
      </div>

      <div class="row">
      	<div class="ten columns centered">
      		<p>10 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="nine columns centered">
      		<p>9 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="eight columns centered">
      		<p>8 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="seven columns centered">
      		<p>7 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="six columns centered">
      		<p>6 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="five columns centered">
      		<p>5 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="four columns centered">
      		<p>4 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="three columns centered">
      		<p>3 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="two columns centered">
      		<p>2 Columns</p>
      	</div>
      </div>

      <div class="row">
      	<div class="one columns centered">
      		<p>1 Col</p>
      	</div>
      </div>

  	</div> 

  </section>
<!--! end of #container -->
  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="js/libs/gumby.js"></script>
  <script src="js/libs/ui/gumby.retina.js"></script>
  <script src="js/libs/ui/gumby.fixed.js"></script>
  <script src="js/libs/ui/gumby.skiplink.js"></script>
  <script src="js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="js/libs/ui/gumby.checkbox.js"></script>
  <script src="js/libs/ui/gumby.radiobtn.js"></script>
  <script src="js/libs/ui/gumby.tabs.js"></script>
  <script src="js/libs/ui/jquery.validation.js"></script>
  <script src="js/libs/gumby.init.js"></script>
  -->
  <script src="js/libs/gumby.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
