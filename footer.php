<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realwanaka
 */

?>

	</div><!-- #content -->

    <footer>
        <div class="container">
            <article class="inner-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
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
                    
                        <ul class="contact social list-unstyled list-inline">
                            <li>
                                <a href="<?php echo get_theme_mod( 'social_media_setting' ); ?>" class="btn">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li> 
                            <li>
                                <a href="mailto:<?php echo get_theme_mod( 'email_setting' ); ?>" class="btn">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                            </li>                                           
                        </ul>                                                     
                    </div>

                    <div class="col-xs-12 col-sm-8">
                        <p><?php echo get_theme_mod( 'textarea_setting' ); ?></p> 
                        <p class="copyright"><?php bloginfo('name');?> <?php echo date('Y'); ?></p>    
                    </div>
                </div>
            </article>
        </div>
    </footer>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>



