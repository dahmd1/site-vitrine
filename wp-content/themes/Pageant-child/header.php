<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabthemes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	
	<header id="masthead" class="site-header" role="banner">

		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="top-left">
						</ul>
					</div>

					<div class="col-md-6">
						<ul class="top-right">
							
							<li><a href="<?php if(function_exists('edd_get_checkout_uri')) { echo edd_get_checkout_uri(); } ?>"> <i class="dashicons dashicons-cart"></i> <span class="header-cart edd-cart-quantity"> <?php if (function_exists('edd_get_cart_quantity')) { echo edd_get_cart_quantity(); }?> </span> <?php _e( 'Panier', 'centinel' );?></a></li>

						</ul>
					</div>
					
				</div>
			</div>
		</div>

		<div class="container"><div class="row"> 
			<div class="col-md-2">
				<div class="site-branding">
					
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

				</div><!-- .site-branding -->
			</div>
            <div class="col-md-8">
            	<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container"> <div class="row"> 
				<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_id' =>'pageant' ) ); ?>

			</div></div>
		</nav><!-- #site-navigation -->
            </div>
		
			<div class="col-md-2">
					<div class="searchbox">
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Entrez un auteur, un livre" value="" name="s" title="Search for:" width=25px/>
							</label>
							<input type="hidden" name="post_type" value="download" />
							<input type="submit" class="search-submit" value="Search" />
						</form>
					</div>
			</div>
		</div></div>

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
