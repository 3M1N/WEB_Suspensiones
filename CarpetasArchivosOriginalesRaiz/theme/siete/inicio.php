<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/estilos.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/interfaz.css" media="all" />
	<!-- IE fixes -->
	<!--[if lte IE 6]>
	<![endif]-->
	
	<!--[if IE]>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/pie.css">
	<![endif]-->
	
	<!-- Google web fonts -->
	<link href='http://fonts.googleapis.com/css?family=Port+Lligat+Slab' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/ie.css">
	<![endif]-->
	
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script src="<?php get_theme_url(); ?>/js/selectivizr-min.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="<?php get_theme_url(); ?>/js/html5.js"></script>
	<![endif]-->

</head>

<body class="home page page-id-6 page-template page-template-homepage-php ms_win">
	
	<!-- Top bar -->
	<header class="sticky_header">
		
		<!-- 978 container -->
		<div class="container classic">
		
			<!-- Logo --> 
			<h1 class="logo">
				<a href="<?php get_site_url(); ?>"><img src="<?php get_theme_url(); ?>/imagenes/logo.png" alt="Logo" /></a>
			</h1> 
			
			<!-- Menu -->
			<ul id="menu-main-menu" class="nav">
				
			<?php get_navigation(return_page_slug()); ?>
		
			</ul>			<!-- end: Menu -->
		
		</div>
		<!-- end: Container -->
				
	</header>
	<!-- end: Top bar -->
	

	<!-- Hero -->
	<section id="hero">
		
		<!-- 978 container -->
		<div class="container clearfix">
			
							
								
				<!-- Homepage slider -->
				
<!-- jQuery slider -->
<div id="hero_slider" class="dayd_jcycle clearfix">
	
		
		
	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide1'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide2'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
				
	</div>
	<!-- end: Slide -->	

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide3'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->	

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide4'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->	

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide5'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->	

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide6'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->	

	<!-- Slide -->
	<div class="slide clearfix">
		
				
		<!-- Slide media -->
		<div class="slide_picture">
			<a href="#"><img src="<?php get_site_url(); ?>data/uploads/<?php get_component('slide7'); ?>" alt="slide" width="600" hieght="230" /></a>				
		</div>
		<!-- end: Slide media -->
		
				
	</div>
	<!-- end: Slide -->	
	
		
</div>
<!-- end: jQuery slider -->


<!-- Arrows -->
<a href="#" class="dayd_arrow next jcycle_arrow"></a>
<a href="#" class="dayd_arrow prev jcycle_arrow"></a>


<!-- Loading gif -->
<div id="hero_loading"></div>				
										
						
		</div>
		<!-- end: Container -->
		
	</section>
	<!-- end: Hero -->		
		
	<div class="container clearfix" id="content">
		
<?php get_component('bloque-inicio'); ?> 
	

			
		<!-- Content column -->
		<section class="content_col">
		
		<!-- Post -->
<article id="page_58" class="post-58 page type-page status-publish hentry clearfix">

	<!-- Post content -->
	<h3><?php get_page_title(); ?></h3>

            <div>
					<?php get_page_content(); ?>
            </div>

</article>
<!-- end: Post -->
		
		</section>
		<!-- end: Content column -->
		
	</div>

		
	<!-- Copyright etc. -->
	<footer>
		
		<!-- 978 container -->
		<div class="container" style="text-align: center;">
			
			<!-- Copyright -->
			<span>&copy; Copyright 2012. | Desarrollado por <a href="http://ikonmr.com">IkonLAB</a>.</span>
			

		</div>
		<!-- end: Container -->
		
	</footer>
	<!-- end: Copyright -->
	



	<!-- WP footer -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.2"></script>
    
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.plugins.js"></script>
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/wb.daydream.js"></script>
	<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.cycle.js"></script>
	
<script type="text/javascript">
$(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 60;
            $(window).scroll(function() {
                if ($("#sidebar").height() < $(window).height() && $(window).scrollTop() > offset.top) { /* LINEA MODIFICADA POR ALEX PARA NO ANIMAR SI EL SIDEBAR ES MAYOR AL TAMAÑO DE PANTALLA */
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
</script>

<script type="text/javascript">
/* <![CDATA[ */
var dayd_slider = {"speed":"250","fx":"scrollHorz","easing":"easeInOutSine","timeout":"8500","pause":"1"};
/* ]]> */
</script>



</body>



</html>

