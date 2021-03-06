<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<base href="<?php echo get_bloginfo('url') ?>"><!--[if lte IE 6]></base><![endif]-->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?> After Class: Student News, from the Division of Student Life at The University of Iowa</title>
		
		<!-- meta tags should be handled by SEO plugin. I recommend (http://yoast.com/wordpress/seo/) -->
		
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width">
		
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
	</head>
	


<?php include 'division-bar/templates/DivisionBar.php' ?>
	
	
		<div id="container">
			
<header id="page_header">
	<div class="container">
		<div class="big_header"><a href="http://afterclass.uiowa.edu"><img src="http://afterclass.uiowa.edu/themes/afterclass2/images/afterclass_logo.png"></a></div>
	  <p class="subheader">the best of UI's culture, events, and nightlife</p>
		    
	
	    
	</div>
</header>

			
				<nav role="navigation" class="nav">
					<div class="nav-wrapper">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div>
				</nav>
			
