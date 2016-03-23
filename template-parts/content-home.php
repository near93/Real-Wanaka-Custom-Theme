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
                <h1 class="title">Sharon Donnelly's business is the sale of Real Estate in Wanaka, New Zealand.</h1>
                <ul class="nav nav-pills row">
                    <li class="col-xs-3 active icon">
                        <a href="#specialty" data-toggle="tab">
                            <h2><i class="fa fa-home"></i></h2>
                            <p class="text-uppercase">Specialty</p>
                        </a>
                    </li>
                    <li class="col-xs-3 icon">
                        <a href="#the-right-result" data-toggle="tab">
                            <h2><i class="fa fa-check-square-o"></i></h2>
                            <p class="text-uppercase">The Right Result</p>
                        </a>
                    </li>
                    <li class="col-xs-3 icon">
                        <a href="#return-on-investment" data-toggle="tab">
                            <h2><i class="fa fa-money"></i></h2>
                            <p class="text-uppercase">Return on Investment</p>
                        </a>
                    </li>
                    <li class="col-xs-3 icon">
                        <a href="#personal-service" data-toggle="tab">
                            <h2><i class="fa fa-user"></i></h2>
                            <p class="text-uppercase">Personal Service</p>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="specialty">
                        <p>Her speciality is in property search and acquisition, finding and securing the best Real Estate - from family homes, investment properties, town houses and apartments, farms, commercial buildings, to land and business opportunities.</p>
                    </div>
                    <div class="tab-pane" id="the-right-result">
                        <p>Sharon's comprehensive knowledge of the market means that she is able to advise on the current market value of properties, as well as price differentials between areas. She can give you the pros and cons of each property, its surroundings, local planning factors, and its potential for improvement.</p>
                    </div>
                    <div class="tab-pane" id="return-on-investment">
                        <p>Real Estate in Wanaka as an investment has proved to be one of the smartest purchases made by investors. The return on your investment can be not only from capital appreciation on the property over time but also from the rental income generated.</p>
                    </div>
                    <div class="tab-pane" id="personal-service">
                        <p>With an approach that is both highly professional and completely personal Sharon is continually informed about properties and land before they come to the market, and about those that are not on the open market at all.</p>
                    </div>
                </div>
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
                        <a href="#" class="view-properties btn btn-primary pull-right">View all</a>
                    </div>
                </div>
                
            <div class="container">
                <?php echo do_shortcode('[listing_feature]');?>

                <section class="show-sm">
                    <?php echo do_shortcode('[listing_feature limit="1"]');?>
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
