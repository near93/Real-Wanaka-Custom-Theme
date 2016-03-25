<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package realwanaka
 */

?>

<section class="no-results not-found">
	<div class="container-fluid">
		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p class="entry-content">
				<?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'realwanaka' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?>
				</p>

			<?php else : ?>

				<p class="entry-content"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'realwanaka' ); ?></p>
			<?php endif; ?>
		</div><!-- .page-content -->		
	</div>
</section><!-- .no-results -->
