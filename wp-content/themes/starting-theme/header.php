<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

 $description = get_bloginfo( 'description', 'display' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<a href="/">
						<img class="branding" width="200px" src="<?php echo get_template_directory_uri(); ?>/images/lynco-logo.svg" alt="<?php bloginfo( 'name' ); ?> | <?php echo $description; ?>"  />
					</a>
				</div>
				<div class="col-xs-6 hamburger wow fadeInRight">
					<!-- Use any element to open/show the overlay navigation menu -->
					<span class="open" onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/images/hamburger-menu.png" /></span>
				</div>
			</div>
		</div>


		<div class="site-branding">



			<!-- The overlay -->
			<div id="myNav" class="overlay">

			  <!-- Button to close the overlay navigation -->
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

				<div class="row in-nav">
					<div class="col-md-3 col-md-offset-9 search">
						<form action="/" method="get">
					    <input type="text" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>" />
					    <input type="image" class="img" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search-icon.png" />
						</form>
						<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Follow Us On Facebook"  />
						<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Follow Us On Twitter" />
					</div>
				</div>

			  <!-- Overlay content -->
			  <div class="overlay-content">

					<?php wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container_class' => 'overlay-content' ) );
						?>

				</div>
			</div>

		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
