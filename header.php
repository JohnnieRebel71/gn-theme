<?php
/**
 * @package Greco Neyland Theme
 * @subpackage gntheme
 * @author jlongdesign.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700|Open+Sans:400,600,700" rel="stylesheet">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Video Loop Background -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/videoloop.js"></script>
	<!-- Nav Shrink -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/nav-shrink.js"></script>

	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri();?>/wp-content/themes/world_of_froyo/images/sample-slideshow.jpg">

	<title><?php
		// Detect Yoast SEO Plugin
		if (defined('WPSEO_VERSION')) {
			wp_title('');
		} else {
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'themename_theme' ), max( $paged, $page ) );
		}
		?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/animate.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/hover.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/font-awesome.css">
	<!-- SCROLL REVEAL -->
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/scrollreveal.min.js"></script>


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->

	<!-- Add CSS3 Rules here for IE 7-9
	================================================== -->

	<!--[if IE]>
	<style type="text/css">
	</style>
	<![endif]-->


	<!-- Mobile Specific Metas
	================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Favicons
	================================================== -->

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

	<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />

	<?php
		/*
		 * enqueue threaded comments support.
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		// Load head elements
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>

	<header id="header" class="full left">
		<!-- Background Video -->
		<div class="homepage-hero-module">
			<div class="video-container">
					<div class="filter"></div>
					<video class="hero-video" autoplay loop class="fillWidth">
							<source src="<?php the_field('hero_mp4'); ?>" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
							<source src="<?php the_field('hero_webm'); ?>" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
					</video>
					<div class="poster">
							<img src="<?php the_field('hero_jpg'); ?>" alt="">
					</div>

					<div id="nav-container" class="container-fluid">
						<div class="row">
							<div class="col-md-46 col-md-offset-1 col-xs-44 col-xs-offset-2">
								<nav class="navbar">
									<div class="left logo-container">
										<?php dynamic_sidebar( 'Logo' ); ?>
									</div>
									<div class="right nav-container">
										<div class="collapse navbar-collapse text-right animated fadeInDown">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'main-nav',
													'menu_class'     => 'primary-menu',
													 ) );
											?>
										</div>
										<button type="button text-center" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						          <span class="icon-bar top-bar"></span>
						          <span class="icon-bar middle-bar"></span>
						          <span class="icon-bar bottom-bar"></span>
									  </button>
									</div>
								</nav>
							</div><!-- End Cols -->
						</div><!-- End Row -->
					</div><!-- End Container -->
					<div class="container-fluid vertalign">
						<div class="row hero-row">
							<div class="col-md-48 text-center hero-txt vertalign">
								<h1><?php the_field('hero_head'); ?></h1>
							</div>
						</div>
						<div class="row button-row">
							<div class="col-md-7 col-md-offset-16 col-sm-15 col-sm-offset-8 col-xs-48 text-center"><?php dynamic_sidebar( 'Left Button' ); ?></div>
							<div class="col-md-2 col-sm-2 col-xs-48 text-center vertalign header-or">OR</div>
							<div class="col-md-7 col-sm-15 col-xs-48 text-center"><?php dynamic_sidebar('Right Button'); ?></div>
						</div>
					</div>
			</div>
		</div>

		<!-- Background Video -->
	</header>

	<section id="info-section" class="full left">
	  <div class="container">
	    <div class="row row-info">
	      <div class="col-md-48 col-md-offset-0 col-xs-44 col-xs-offset-2 info-block">
	        <div class="col-md-12 text-center info-section info-sec1">
            <div class="vertalign"><?php dynamic_sidebar( 'Info Sec1' ); ?></div>
	        </div>
	        <div class="col-md-12 text-center info-section info-sec2">
	        	<div class="vertalign"><?php dynamic_sidebar( 'Info Sec2' ); ?></div>
	        </div>
	        <div class="col-md-12 text-center info-section info-sec3">
            <div class="vertalign"><?php dynamic_sidebar( 'Info Sec3' ); ?></div>
	        </div>
	        <div class="col-md-12 text-center info-section info-sec4 vertalign">
						<div class="row">
							<table class="address-info" cellspacing="0" cellpadding="0" border="0" valign="top">
								<tr>
									<td><img class="map-marker" src="<?php echo get_stylesheet_directory_uri();?>/images/map-marker.png" alt="Map Marker" /></td>
									<td class="info-address"><div class="vertalign"><?php dynamic_sidebar( 'Info Sec4' ); ?></div></td>
								</tr>
							</table>
          	</div>
	        </div>
	      </div>
	    </div>
	  </section>
