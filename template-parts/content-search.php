<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package realwanaka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php realwanaka_entry_footer(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-## -->
