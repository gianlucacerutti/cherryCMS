<?php
// General configurations
include_once('base/config.php');

// General configurations
include_once('base/functions.php');

// Website content in array format
include_once('content.php');

// What's the page where I am?
include_once('base/url-manager.php');

// Translations
include_once("translations/translation-$current_lang.php");

// Social accounts
include_once('base/social-accounts.php');
?>
<!-- HTML5 -->
<!doctype html>
<html lang="<?php echo $current_lang ?>">
	<head>
		<!-- Set character encoding for the document -->
		<meta charset="utf-8">

		<!-- Instruct Internet Explorer to use its latest rendering engine -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Viewport for responsive web design -->
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

		<!-- Document Title see content.php-->
		<title><?php echo $page[$current_page]['meta_title'][$current_lang]; ?></title>

		<!-- Meta Description see content.php-->
		<meta name="description" content="<?php echo $page[$current_page]['meta_description'][$current_lang]; ?>">

		<!-- Recommended favicon format 32x32px, place your favicon in icons folder -->
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo return_website_path(); ?>icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo return_website_path(); ?>icons/favicon-16x16.png">

		<!-- Website manifest for Android webapp, give a look -->
		<link rel="manifest" href="<?php echo return_website_path(); ?>icons/site.webmanifest">
		<!-- Application name for Android webapp -->
		<meta name="application-name" content="cherryCMS">

		<!-- Safari pinned tab icon, place it in icons folder -->
		<link rel="mask-icon" href="<?php echo return_website_path(); ?>icons/safari-pinned-tab.svg" color="#ff3860">

		<!-- Shortcut icon for browsers, place it in icons folder -->
		<link rel="shortcut icon" href="<?php echo return_website_path(); ?>icons/favicon.ico">

		<!-- Apple Touch Icon, place your apple-touch-icon in icons folder -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo return_website_path(); ?>icons/apple-touch-icon.png">
		<!-- To run web application in full-screen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Status Bar Style (see Supported Meta Tags: goo.gl/cDQVqz) -->
		<!-- Has no effect unless you have the previous meta tag -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!-- Name of Apple mobile app -->
		<meta name="apple-mobile-web-app-title" content="cherryCMS">

		<!-- Microsoft Tiles see browserconfig.xml in icons folder-->
		<meta name="msapplication-TileColor" content="#f0ffff">
		<meta name="msapplication-TileImage" content="<?php echo return_website_path(); ?>icons/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo return_website_path(); ?>icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<!-- Set style, you can use your own CSS or give a look at Bulma CSS Framework by jgthms on Github: https://goo.gl/rmgNk5  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">

		<!-- Import Font Awesome 5 icons  -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

		<!-- Helps prevent duplicate content issues -->
		<link rel="canonical" href="<?php echo return_website_path(); ?><?php echo $page[$current_page]['canonical'][$current_lang]; ?>">
		<?php include('base/alternate-languages.php'); ?>
	
		<!-- Facebook Open Graph -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo return_website_path(); ?><?php echo $page[$current_page]['canonical'][$current_lang]; ?>">
		<meta property="og:title" content="<?php echo $page[$current_page]['meta_title'][$current_lang]; ?>">
		<meta property="og:image" content="<?php echo return_website_path(); ?>facebook-opengraph/image.jpg">
		<meta property="og:description" content="<?php echo $page[$current_page]['meta_description'][$current_lang]; ?>">
		<meta property="og:site_name" content="<?php echo $site_name ?>">
		<meta property="og:locale" content="en_US">
		<!-- Next tags are optional but recommended -->
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
	
		<!-- Twitter card -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="<?php echo $twitter_website_account ?>">
		<meta name="twitter:url" content="<?php echo return_website_path(); ?><?php echo $page[$current_page]['canonical'][$current_lang]; ?>">
		<meta name="twitter:title" content="<?php echo $page[$current_page]['meta_title'][$current_lang]; ?>">
		<meta name="twitter:description" content="<?php echo $page[$current_page]['meta_description'][$current_lang]; ?>">
		<meta name="twitter:image" content="<?php echo return_website_path(); ?>twitter/image.jpg">
	</head>
	<body>
		<!-- Global site tag (gtag.js) - Google Analytics -->
    	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114912172-1"></script>
    	<script>
    	 window.dataLayer = window.dataLayer || [];
    	 function gtag(){dataLayer.push(arguments);}
    	 gtag('js', new Date());
    	
    	 gtag('config', 'YOUR-GA-CODE-HERE');
    	</script>

    	<!-- Include Navbar -->
    	<?php include_once("fragments/navbar.php"); ?>

  			<!-- Include Content based on url and current lang -->
			<?php include ($page[$current_page]['content'][$current_lang]); ?>

			<!-- Include Footer -->
  			<?php include_once("fragments/footer.php"); ?>

  		<!-- Load jquery library -->
  		<script
		  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
		  crossorigin="anonymous">
		</script>
		<!-- Load .js for mobile nav -->
		<script type="text/javascript" src="<?php echo return_website_path(); ?>js/mobile-nav.js"></script>
	</body>
</html>