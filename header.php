<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realwanaka
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

<body <?php body_class(); ?>
	<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner" style="background:url('<?php echo get_bloginfo('template_directory');?>/img/hero-bg.jpg') no-repeat center center;">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <button type="button" id="property-search-btn" class="btn pull-right">
                    <span><i class="fa fa-search"></i></span>
                </button>
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                </div>

                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse pull-right',
                        'container_id'      => 'navbar',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>                
            </div>
        </nav>  

        <?php if ( is_page_template( 'page-home.php' )) { ?>
            <section id="hero-home" class="hero">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 ">
                            <article class="inner-content">
                                <h1 class="title">Sharon Donnelly's business is the sale of Real Estate in Wanaka, New Zealand.</h1>  
                            </article>                        
                        </div>
                    </div>
                </div>
            </section>
        <?php } else { ?>
            <section id="hero-page" class="hero">
                <div class="container-fluid">
                    <article class="inner-content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="breadcrumbs">Home / Page Title</span>  
                    </article>                        
                </div>
            </section>
        <?php } ?>
  

	</header><!-- #masthead -->

    <!--THIS WILL BE A HEADER SIDEBAR-->
    <div class="search-property slidetoggle">
        <div class="wrap">
            <h1><a href="#" class="close-search"><i class="fa fa-times"></i></a></h1>
            <!--<?php echo do_shortcode( '[listing_search]' );?>-->
        </div>
    </div>

    <!--/END OF HEADER-->
	<div id="content" class="site-content">
