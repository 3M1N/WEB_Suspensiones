<?
session_start ();
session_destroy ();

unset ( $_SESSION ['idusuario'] );
unset ( $_SESSION ['nombreusuario'] );
//echo md5("miguel");
?>




		
	<script>
	function ingresarsistema()
	{
		 var parametros = {
	            "txtcorreousuario" : document.getElementById("txtcorreousuario").value,
	            "txtpassword" : document.getElementById("txtpassword").value,
	            "function" :"ingresarsistema"
	           
	    };
	    $.ajax({
	            data:  parametros,
	            url:   'cmd_login.php',
	            type:  'post',
	            beforeSend: function () {
	                    $("#resultado").html("Procesando, espere por favor...");
	            },
	            success:  function (response) 
	            {
	            	alert(response);
	            	if(response==1)
	            	{
	            		window.location="frm_adminpanel.php";
	            	}
	            	else
	            	{
	            		 $("#resultado").html("El usuario no existe");
	            	}
	            	
	            }
	    });
	}
	
	</script>
</head>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Todo en Suspensiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="content description">
    <meta name="author" content="mustachethemes">

	<style>
		@font-face {
    font-family: 'QuicksandLight';
    src: url('../../Quicksand_Light-webfont.eot');
    src: url('../../Quicksand_Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../Quicksand_Light-webfont.woff') format('woff'),
         url('../../Quicksand_Light-webfont.ttf') format('truetype'),
         url('../../Quicksand_Light-webfont.svg#QuicksandLight') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandLightOblique';
    src: url('../../fonts/Quicksand_Light_Oblique-webfont.eot');
    src: url('../../fonts/Quicksand_Light_Oblique-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Light_Oblique-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Light_Oblique-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Light_Oblique-webfont.svg#QuicksandLightOblique') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandBook';
    src: url('../../fonts/Quicksand_Book-webfont.eot');
    src: url('../../fonts/Quicksand_Book-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Book-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Book-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Book-webfont.svg#QuicksandBook') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandBookOblique';
    src: url('../../fonts/Quicksand_Book_Oblique-webfont.eot');
    src: url('../../fonts/Quicksand_Book_Oblique-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Book_Oblique-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Book_Oblique-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Book_Oblique-webfont.svg#QuicksandBookOblique') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandBold';
    src: url('../../fonts/Quicksand_Bold-webfont.eot');
    src: url('../../fonts/Quicksand_Bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Bold-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Bold-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Bold-webfont.svg#QuicksandBold') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandBoldOblique';
    src: url('../../fonts/Quicksand_Bold_Oblique-webfont.eot');
    src: url('../../fonts/Quicksand_Bold_Oblique-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Bold_Oblique-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Bold_Oblique-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Bold_Oblique-webfont.svg#QuicksandBoldOblique') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'QuicksandDash';
    src: url('../../fonts/Quicksand_Dash-webfont.eot');
    src: url('../../fonts/Quicksand_Dash-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../fonts/Quicksand_Dash-webfont.woff') format('woff'),
         url('../../fonts/Quicksand_Dash-webfont.ttf') format('truetype'),
         url('../../fonts/Quicksand_Dash-webfont.svg#QuicksandDash') format('svg');
    font-weight: normal;
    font-style: normal;

}


	</style>

    <!-- Your Styles
    ================================================== -->
    <link href="../css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../js/twitter/jtwt.css" />
	 <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="../img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/icons/apple-touch-icon-114x114.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/font-awesome-ie7.css">
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen"/>
    <![endif]-->
    <!--[if IE 7 ]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

</head>

<body>
<div id="main_container" class="clearfix">
<!--Begin content main-->
    <section id="content" class="home home_one">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                        
                        <div class="left_content">
                            <ul class="info row-fluid field1">
                                
                                <li class="box2 span2 offset0 color_one  sresume" onclick="javascript:window.location='../index.html'" style="cursor:pointer">
                                    <p>
                                    	<img src='../img/home/logo.png' >
                                    </p>
                                    <p>
                                        <img src='../img/home/slogan.png'>
                                    </p>
                                    
                                </li>
                                
                                
                                <li class="box span3 offset0 color_two experience" style="text-align: center; padding-top: 60px" onmouseover="this.style.background='#004987';">
                                    <font style="font-size: 24px; font-weight: lighter">
                                    	Acceso al Panel de Administración
                                    </font>

                                </li>
                            </ul>
                            
                            
                            
                            <ul class="info row-fluid field2">
                            
                                <li class="box2 span1 offset0 photo">
                                   <img src="../img/home/fachada.jpg">
                                   
                                </li>
                                
                                <li class="box span1 offset0 color_four education" onmouseover="this.style.background='#004987';">
                                    
                                </li>
                                
                                <li class="box2 span1 offset0 photo">
                                   
                                        <img src="../img/home/6.jpg" >
                                    
                                </li>
                                
                                <li class="box span2 offset0 color_five portfolio" style="background: #f7a700">
                                    <table width="100%" border="0">
                                    	<tr>
                                    		<td colspan="2" align="center" style="padding-bottom: 20px; font-weight: lighter;">Ingresa tus datos</td>
                                    	</tr>
                                    	<tr>
											<td class='etiquetainiciologeo' style="font-weight: lighter">Correo:</td>
											<td>
												<input type='text' id='txtcorreousuario' name='txtcorreousuario' class="inputlogeo">
											</td>
										</tr>
										<tr>
											<td colspan='2' height='10px'></td>
										</tr>
										<tr>
											<td class='etiquetainiciologeo' style="font-weight: lighter">Password:</td>
											<td>
												<input type='password' id='txtpassword' name='txtpassword' class="inputlogeo">
											</td>
										</tr>
										<tr>
											<td colspan='2'>&nbsp;</td>
										</tr>
										<tr>
											<td colspan='2' align='center'>
												<input type=button value='Entrar' onclick='ingresarsistema()'>
											</td>
										</tr>
										<tr>
											<td colspan='2' >
												<div id='resultado'></div>
											</td>
										</tr>
                                    </table>
                                </li>
                                
                                
                                
                            </ul>
                            
                            
                            <ul class="info row-fluid field3">
                            
                                <li class="box span1 offset0 color_five " onmouseover="this.style.background='#004987';">
                                    
                                </li>
                                
                                <li class="box2 span1 offset0 photo">
                                     <img src="../img/home/4.jpg" >
                                </li>
                                
                                <li class="box span1 offset0 color_two blog" onmouseover="this.style.background='#004987';">
                                    
                                </li>
                                
                                <li class="box2 span1 offset0 photo">
                                    <img src="../img/home/1.jpg" >
                                   
                                </li>
                                
                                <li class="box span1 offset0 color_two contact" onmouseover="this.style.background='#004987';">
                                   
                                </li>
                                
                                <li class="social_box social_hide box span1 offset0 color_six facebook">
                                    <a href="#">
                                        <span class="sprite sprite-facebook-png"></span>
                                        <p class="metro_text">facebook</p>
                                    </a>
                                </li>
                                
                                <li class="social_box social_hide box span1 offset0 color_seven dribble">
                                    <a href="#">
                                        <span class="sprite sprite-dribbing-png"></span>

                                        <p class="metro_text">dribble</p>
                                    </a>

                                </li>
                                
                                <li class="social_box social_hide box span1 offset0 color_eight twitter">
                                    <a href="#">
                                        <span class="sprite sprite-twitter-png"></span>

                                        <p class="metro_text">twitter</p>
                                    </a>

                                </li>
                                
                                <li class="social_box social_hide box span1 offset0 color_nine pinterest">
                                    <a href="#">
                                        <span class="sprite sprite-pinterest-png"></span>

                                        <p class="metro_text">pinterest</p>
                                    </a>

                                </li>
                                
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="banner_text" style="text-align: center">
			<img src="../img/foot.jpg"  style="width:1170px;text-align: center">
		</div>
        </div>
    </section>
<!--End begin content main-->
	 
		
	
</div>

<!-- ======================= JQuery libs =========================== -->
    <!-- Always latest version of jQuery-->
    <script src="../js/jquery-1.7.1.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>-->
    <!-- Bootstrap.js-->
    <script src="../js/bootstrap.js"></script>
    <!--fUNCTIONS-->
    <script src="../js/js.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/twitter/jquery.jtwt.js"></script>
    <script src="../js/filter/quiksand.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery-func.js"></script>
<!-- ======================= End JQuery libs =========================== -->

</body>
</html>



<!--
<body>
	<div id='contenedorprincipal'>
		<div id='header'>
			<div id='contenedorlogo'>&nbsp;</div>
			<div id='contenedorlinkheader'>
				<ul id='menusecundario'>
					<li><a href='../index.php'>Regresar al sitio</a></li>
					
				</ul>
			</div>
			<div id='renglonparacontenedormenuprincipal'>
				<div id='divcontenedorbgazulmenuprincipal'>
					<div id='contendorlinksmenu'>
						<p>PANEL DE CONTROL</p>
					</div>
					
				</div>
				
			</div>
		</div>
	
		<div id='tablalogeo'>
			<table width='860px' border='0' cellpadding=0 cellspacing=0 align='center' class='tablainicio'>
				<tr >
					<td colspan='2' class='renglonuno'>
						<table>
							<tr>
								<td class='leyendapanel'>PANEL DE CONTROL</td>
							</tr>
							
						</table>
					</td>
				</tr>
				<tr>
					<td height='60px' colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td width='400px'>
						<img src="images/IMAGEN_LOGIN.jpg">
					</td>
					<td  >
						<table align='left'  width='450px'>
							<tr>
								<td class='etiquetainiciologeo'>Correo:</td>
								<td>
									<input type='text' id='txtcorreousuario' name='txtcorreousuario' class="inputlogeo">
								</td>
							</tr>
							<tr>
								<td colspan='2' height='10px'></td>
							</tr>
							<tr>
								<td class='etiquetainiciologeo'>Password:</td>
								<td>
									<input type='password' id='txtpassword' name='txtpassword' class="inputlogeo">
								</td>
							</tr>
							<tr>
								<td colspan='2'>&nbsp;</td>
							</tr>
							<tr>
								<td colspan='2' align='center'>
									<input type=button value='Entrar' onclick='ingresarsistema()'>
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<div id='resultado'></div>
								</td>
							</tr>
						</table>	
					</td>
				</tr>
				<tr>
					<td height='60px' colspan="2">&nbsp;</td>
				</tr>
			</table>
		</div>
	
	</div>
	
</body>
</html>
-->

