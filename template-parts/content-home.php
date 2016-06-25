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
