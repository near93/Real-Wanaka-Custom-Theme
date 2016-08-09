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

	<header id="masthead" class="site-header" role="banner">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid"> 
                <div class="row no-gutter">
                    <div class="col-xs-4 col-sm-12 col-md-2 col-lg-2">
                        <div class="logo">
                        <?php if ( get_theme_mod( 'site_logo' ) ) : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img src="<?php echo get_theme_mod( 'site_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
                            </a>
                        <?php else : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <p class="site-title"><?php echo get_bloginfo( 'name' ); ?></p>
                            </a> 
                        <?php endif; ?>                      
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-12 col-md-1 col-lg-2">
                        <button type="button" class="property-search-btn show-sm btn pull-right">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>                        
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                        <button type="button" class="property-search-btn hide-sm btn pull-right">
                            <span><i class="fa fa-search"></i></span>
                        </button>
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
                </div>                       
            </div>
        </nav>  

    <div class="header-bg" style="background:linear-gradient( rgba(0,32,14,0.50), rgba(0,32,14,0.50) ), url('<?php echo get_theme_mod('theme_header_bg'); ?>') no-repeat center center fixed;">
        <?php if ( is_page( 'page-home.php' )) { ?>

        <?php } elseif (is_404()) {?>
            <section id="hero-page" class="hero">
                <div class="container-fluid">
                    <article class="inner-content">
                        <h2 class="title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'realwanaka' ); ?></h2>
                    </article>                        
                </div>
            </section> 
        <?php } elseif (is_archive()) {?>
            <section id="hero-page" class="hero">
                <div class="container-fluid">
                    <article class="inner-content">
                        <h2 class="title">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </h2>
                    </article>                        
                </div>
            </section> 

        <?php } else { ?>
            <section id="hero-page" class="hero">
                <div class="container-fluid">
                    <article class="inner-content">
                        <h2 class="title"><?php the_title(); ?></h2> 
                    </article>                        
                </div>
            </section>
        <?php } ?>
    </div>

    <?php if ( is_page_template( 'page-home.php' )) { ?>
        <section id="featured-property">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9">
                            <article class="inner-content">
                                <h1 class="title">Featured Properties</h1>
                            </article>                    
                        </div>

                        <div class="col-xs-3 col-sm-3 hide-sm">
                            <a href="<?php the_field('all_featured'); ?>" class="view-properties btn btn-primary pull-right">View all</a>
                        </div>
                    </div>
                    
                <div class="container">
                    <section>
                        <?php echo do_shortcode('[listing post_type="property" limit="6" tools_top="on"]');?>
                    </section>
                       
                </div>             
            </div>         
        </section>
    <?php } ?>
  
	</header><!-- #masthead -->

    <!--THIS WILL BE A HEADER SIDEBAR-->
    <div class="search-property slidetoggle">
        <div class="wrap">
            <?php echo do_shortcode( '[listing_search search_id="on" search_location="off" search_house_category="off" search_price="on" search_bed="on" search_bath="on" search_rooms="on"]' );?>
        </div>
    </div>

    <!--/END OF HEADER-->
	<div id="content" class="site-content">
