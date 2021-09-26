<?php
/**
 * The sidebar containing the order form widget area
 *
 * @package iwriter
 */

if ( ! is_active_sidebar( 'order-form-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'order-form-sidebar' ); ?>
</aside><!-- #secondary -->
