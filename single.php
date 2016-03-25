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
			<main id="main" class="site-main entry-content" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );


			endwhile; // End of the loop.
			?>

			</main><!-- #main -->					
		</div>
	</div><!-- #primary -->

<?php
get_footer();
