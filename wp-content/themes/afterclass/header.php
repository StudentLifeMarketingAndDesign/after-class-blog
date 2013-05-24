<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?> Under the Dome, from the Division of Student Life at The University of Iowa</title>
		
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
		<!--[if lt IE 9]>
		<script src="/js/vendor/respond.min.js"></script>
		<![endif]-->

		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
	</head>
	


<div id="studentlife-header">
	<div class="studentlife-container">
		<div class="main-links"><a href="http://www.uiowa.edu/" target="_blank">The University of Iowa</a> <span><a href="http://studentlife.uiowa.edu" target="_blank">Division of Student Life</a></span></div>
		<ul id="univ-nav">
			<li id="univ-nav-imu"><a href="http://imu.uiowa.edu" target="_blank">Iowa Memorial Union</a></li>
			<li id="univ-nav-recserv"><a href="http://recserv.uiowa.edu/" target="_blank">Recreational Services</a></li>
			<li id="univ-nav-osl" class="last"><a href="http://imu.uiowa.edu/students/" target="_blank">Student Involvement/Leadership</a></li>
		</ul>
		
		<div class="clearfix"></div> <!-- TODO: remove -->
	</div>
</div>
	
	
		<div id="container">
			
<header id="page_header">
	<div class="container">
		<div class="big_header"><a href="http://afterclass.uiowa.edu"><img src="http://hulk.imu.uiowa.edu/afterclass_dev/themes/afterclass2/images/afterclass_logo.png"></a></div>
	  <p class="subheader">the best of UI's culture, events, and nightlife</p>
		    
	
	    
	</div>
</header>

			
				<nav role="navigation" class="nav">
					<div class="nav-wrapper">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div>
				</nav>
			
