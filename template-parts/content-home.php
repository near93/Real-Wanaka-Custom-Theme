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
    <!-- THIS WILL BE A RESPONSIVE CAROUSEL SLIDER-->
    <section id="featured-property">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-9 col-sm-9">
                        <article class="inner-content">
                            <h1 class="title">Featured Properties</h1>
                        </article>                    
                    </div>

                    <div class="col-xs-3 col-sm-3 hide-sm">
                        <a href="#" class="view-properties btn btn-primary pull-right">View all</a>
                    </div>
                </div>
                
            <div class="container">
                <!--<ul class="featured-list bxslider">
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house1.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="sale-date">
                                            Deadline Sale<br/>
                                            <span>4pm 14 April (unless sold prior)</span>
                                        </h3>
                                        <a href="#" class="btn btn-primary more">view</a>
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">Family home or rental investment</h3>
                            <p class="address">71 Kings Drive, Wanaka</p>
                        </article>
                    </li>
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house2.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="sale-date">
                                            Deadline Sale<br/>
                                            <span>4pm, 8 Apr (unless sold prior)</span>
                                        </h3>
                                        <a href="#" class="btn btn-primary more">view</a> 
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">Modern spacious family home</h3>
                            <p class="address">22 Kelliher Drive, Wanaka</p>
                        </article>                    
                    </li>
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house3.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="price">$609,000</h3>
                                        <a href="#" class="btn btn-primary more">view</a> 
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">Ideal holiday pad or rental investment</h3>
                            <p class="address">Unit 8, 146 Anderson Road</p>
                        </article>                    
                    </li>
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house1.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="sale-date">
                                            Deadline Sale<br/>
                                            <span>4pm 14 April (unless sold prior)</span>
                                        </h3>
                                        <a href="#" class="btn btn-primary more">view</a>
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">HOUSE 4</h3>
                            <p class="address">71 Kings Drive, Wanaka</p>
                        </article>
                    </li>
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house2.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="sale-date">
                                            Deadline Sale<br/>
                                            <span>4pm, 8 Apr (unless sold prior)</span>
                                        </h3>
                                        <a href="#" class="btn btn-primary more">view</a> 
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">HOUSE 5</h3>
                            <p class="address">22 Kelliher Drive, Wanaka</p>
                        </article>                    
                    </li>
                    <li>
                        <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house3.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="price">$609,000</h3>
                                        <a href="#" class="btn btn-primary more">view</a> 
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">HOUSE 6</h3>
                            <p class="address">Unit 8, 146 Anderson Road</p>
                        </article>                    
                    </li>
                </ul>-->

                <?php echo do_shortcode('[listing_feature class="bxslider"]');?>

                <section class="show-sm">
                    <ul class="featured-list list-unstyled">
                        <li>
                            <article class="property-content">
                            <div class="preview" style="background: url('<?php echo get_bloginfo('template_directory');?>/img/house1.jpg') no-repeat center center;">
                                <article class="t-wrap inner-content">
                                    <div class="t-content">
                                        <h3 class="sale-date">
                                            Deadline Sale<br/>
                                            <span>4pm 14 April (unless sold prior)</span>
                                        </h3>
                                        <a href="#" class="btn btn-primary more">view</a>
                                    </div>
                                </article>
                            </div>
                            <h3 class="title">Family home or rental investment</h3>
                            <p class="address">71 Kings Drive, Wanaka</p>
                        </article>
                        </li>
                    </ul>
                    <a href="#" class="view-properties btn btn-primary text-center">View all</a>
                </section>    
            </div>             
        </div>         
    </section>

    <section id="property-alerts" class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                    <article class="inner-content">
                        <p>Be the first to know! 
                    Sign up property alerts and you'll get an email when a property is added that matches your preferences. </p> 
                        <button type="button" class="btn btn-primary">I'd like to know more!</button>
                    </article>                        
                </div>
            </div>   
        </div>
    </section>   
</article><!-- #post-## -->
