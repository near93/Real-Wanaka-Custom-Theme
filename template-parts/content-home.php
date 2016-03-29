<?php
/**
 * Template part for displaying page content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package realwanaka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section id="about" class="text-center">
        <div class="container">
            <article class="inner-content">
                <?php the_content(); ?>
            </article>
        </div>
    </section>

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
                <section id="featured-slider" class="hide-sm">
                    <?php echo do_shortcode('[listing_feature]');?>
                </section>
                

                <section class="show-sm">
                    <?php echo do_shortcode('[listing_feature limit="1"]');?>
                    <a href="<?php the_field('all_featured'); ?>" class="view-properties btn btn-primary text-center">View all</a>
                </section>    
            </div>             
        </div>         
    </section>

    <section id="property-alerts" class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                    <article class="inner-content">
                        <p><?php the_field('property_alert_content'); ?></p> 
                        <a href="<?php the_field('property_alert_button_link'); ?>" type="button" class="btn btn-primary"><?php the_field('property_alert_button_text'); ?></a>
                    </article>                        
                </div>
            </div>   
        </div>
    </section>   
</article><!-- #post-## -->
