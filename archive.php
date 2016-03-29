<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package realwanaka
 */

get_header(); ?>

	<div id="primary" class="content-area property-page">
		<div class="container-fluid">
			<main id="main" class="site-main entry-content" role="main">
				<div class="search">
					<?php echo do_shortcode( '[listing_search search_id="off" search_location="on" search_house_category="off" search_price="on" search_bed="on" search_bath="off" search_rooms="off"]' );?>
				</div>
						<?php
						if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
