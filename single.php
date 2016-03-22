<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package realwanaka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content');

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->					
				</div>
				<div class="col-sm-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
