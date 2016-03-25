<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package realwanaka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container-fluid">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found entry-content">
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'realwanaka' ); ?></p>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
