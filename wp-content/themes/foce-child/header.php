<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--font-awesome-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <!-- MENU BURGER -->
    <header id="masthead" class="site-header">
        <!--NAV BAR STICKY -->
        <nav id="site-navigation" class="site-navigation">
            <div class="navbar-full">
                <div class="navbar-full-head">
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                    <i class="fas fa-bars"></i> 
                </div>
                <!-- MODAL ONCLICK -->
                <div class="modal">
                    <div class="navbar-full-list">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_miniature.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                        <a id="link-story" href="#story">Histoire</a>
                        <a id="link-characters" href="#characters">Personnages</a>
                        <a id="link-place" href="#place">Lieu</a>
                        <a id="link-studio" href="#studio">Studio Koukaki</a>
                        <p>STUDIO KOUKAKI</p>
                    </div>
                </div>
                <!-- END MODAL ONCLICK -->
            </div>
        </nav>
        <!--END NAV BAR STICKY-->     
    </header>
    <!-- FIN MENU BURGER -->
    
