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
		<article class="inner-content">
			<div class="search">
				<?php echo do_shortcode( '[listing_search search_id="off" search_location="on" search_house_category="off" search_price="on" search_bed="on" search_bath="off" search_rooms="off"]' );?>
			</div>
			<div class="clearfix"></div>
			<?php the_content(); ?>				
		</article>			
	</section>		
	</div>
</article><!-- #post-## -->
