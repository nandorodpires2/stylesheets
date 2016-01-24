<?php
/**
 * The Sidebar containing the footer mid widget area.
 *
 * @package thbusiness
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
            <?php if ( ! dynamic_sidebar( 'footer-mid' ) ) : ?>
            <h1 class="footer-widget-title">Assine nossa newletter</h1>
            <?php echo do_shortcode('[newsletter_form]'); ?>
            <?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
