<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package three-sixty
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="container">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'three-sixty' ); ?></a>

		<header class="page-header">

			<a href="/home/" class="col-xs-4"><img src="http://360fulfillmentnow.com/wp-content/themes/three-sixty/images/360-logo.png"></a>

			<div class="navbar">
				<div class="container">

					<div class="navbar-header">

						<button class="navbar-toggle col-xs-2 col-xs-offset-6" type="button" data-toggle="collapse" data-target="#navbar-content">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<nav id="navbar-content" class="collapse navbar-collapse col-xs-8">
							<ul class="nav navbar-nav">
								<li>
									<a href="/home/">Home</a>
								</li>
								<li>
									<a href="/services/">Services</a>
								</li>
								<li>
									<a href="/about-us/">About Us</a>
								</li>
								<li>
									<a href="/contact-us/">Contact Us</a>
								</li>
								<li class="social">
									<a href="#todo" class="noborder"><!--class social-->Connect With Us <!--<img src="http://360fulfillmentnow.com/wp-content/themes/three-sixty/images/fb-logo.png">--></a>
								</li>
							</ul>
						</nav>

					</div><!-- navbar-header -->
				</div><!-- container -->
			</div><!-- navbar -->

		</header>

		<div class="row">

			<div class="col-md-4 graylink header-caption">
				<ul>
					<li><h3>CALL US TODAY</h3></li>
					<li><h3><a href="tel:4805408551">480-540-8551</a></h3></li>
				</ul>
			</div>

		</div>

		<div id="content" class="site-content">
