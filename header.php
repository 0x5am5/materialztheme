<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialzTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'materialztheme' ); ?></a>

	<header id="masthead" role="banner" class="page-header">
		<div class="card small">
            <div class="card-image">
    			<?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
    			if ( is_front_page() && is_home() ) : ?>
    				<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
                    <p class="card-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="white-text"><?php bloginfo( 'name' ); ?></a>
                    </p>
    			<?php else : ?>
    				<p class="card-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="white-text"><?php bloginfo( 'name' ); ?></a></p>
    			<?php
    			endif; ?>
            </div>

			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                <div class="card-content">
				    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                </div>
			<?php
			endif; ?>

            <div class="card-action">
                <div class="nav-wrapper">
                    <nav id="site-navigation" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'left' ) ); ?>
                	</nav><!-- #site-navigation -->
                </div>
            </div>
        </div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
