<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        
        <script src="https://kit.fontawesome.com/ed16cfa399.js" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div>
			
			<!-- header -->
			<header class="header clear row no-gutters" role="banner">
				<div class="col">
				<div class="limit">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>" class="logo-img">SWAG: Lessons in Sexual Wellness and Growth</a>
					</div>
					<!-- /logo -->

					<!-- Mobile Nav Button -->
					<img src="<?php echo get_template_directory_uri() ?>/img/menu-m.svg" id="mobile-nav" />

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					<div class="header-tools">
						<?php get_template_part('searchform'); ?>
						<?php if (is_user_logged_in()) {?><a href="/my-toolkit"><?php } else { ?><a href="/log-in"><?php } ?><img src="<?php echo get_template_directory_uri() ?>/img/icon-settings.svg" id="settings-icon" /></a>
					</div>
				</div>
				</div>
			</header>
			<!-- /header -->
