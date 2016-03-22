<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package realwanaka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
	<section class="entry-content">
		<div class="row">
			<article class="inner-content">
				<?php the_content(); ?>				
			</article>			
		</div>
	</section>		
	</div>
</article><!-- #post-## -->
