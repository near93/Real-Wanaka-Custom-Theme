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
                        <h3 class="site-title">
                            <?php bloginfo( 'name' ); ?>
                        </h2>
                    
                        <p>PH: 0275 617 235</p>
                     
                        <ul class="contact social list-unstyled list-inline">
                            <li>
                                <a href="#" class="btn">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li> 
                            <li>
                                <a href="mailto:sharondonnelly@realwanaka.co.nz" class="btn">
                                <i class="fa fa-envelope-o"></i>
                                </a>
                            </li>                                           
                        </ul>                          
                    </div>

                    <div class="col-xs-12 col-sm-8">
                        <p> Disclaimer: The information on this website has been supplied to us and whilst we have no reason to doubt the accuracy, we cannot guarantee it. All interested parties should make their own inquiries to verify the information.
                        </p> 
                        <p><?php bloginfo('name');?> <?php echo date('Y'); ?></p>    
                    </div>
                </div>
            </article>
        </div>
    </footer>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
