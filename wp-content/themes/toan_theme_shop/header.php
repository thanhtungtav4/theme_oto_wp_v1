<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/thuvien/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/thuvien/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/thuvien/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/thuvien/css/fontawesome-all.min.css">
        


        <script src="<?php echo get_template_directory_uri(); ?>/thuvien/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/thuvien/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/thuvien/owl.carousel.min.js" type="text/javascript"></script>

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

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<header class="header clear" role="banner">
				<div class="toan_top_header">
					<div class="container">
						<div class="table_header">
							<a href="<?php echo home_url(); ?>">
							<?php dynamic_sidebar( 'logo' ); ?>
							</a>
							<div class="form-search">
								<form class="search" method="get" action="http://localhost/phoneshop" role="search">
									<input class="search-input" type="search" name="s" placeholder="Nhập sản phẩm cần tìm.">
									<button class="search-submit" type="submit" role="button"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					</div>
			</div>
			<!-- header -->	
			</header>
			<!-- /header -->
