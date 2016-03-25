<?php
/*
 * Single Property Template: Expanded Compatibility
 *
 * @package easy-property-listings
 * @subpackage Theme
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'epl-listing-single epl-property-single view-expanded epl-property-single-compatibility' ); ?>>

	<div class="epl-content epl-clearfix">
		<div class="tab-wrapper">
			<div class="row">
				<div class="col-sm-7">
					<div class="epl-tab-section epl-section-description">
						<h5 class="epl-tab-title"><?php echo apply_filters('epl_property_tab_title_description',__('Description', 'epl')); ?></h5>
						<div class="tab-content">
							<?php
								do_action('epl_property_content_before');
								
								do_action('epl_property_the_content');
								
								do_action('epl_property_content_after');
							?>
						</div>
					</div>				
				</div>
				<div class="col-sm-5">
					<?php do_action('epl_property_tab_section_before'); ?>
					<div class="epl-tab-section epl-tab-section-features">
						<?php do_action('epl_property_tab_section'); ?>
					</div>
					<?php do_action('epl_property_tab_section_after'); ?>
					
					<?php do_action( 'epl_property_gallery' ); ?>			
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<h2><?php do_action('epl_property_title','epl_property_the_address'); ?></h2>
					<?php do_action( 'epl_property_map' ); ?>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end property -->
