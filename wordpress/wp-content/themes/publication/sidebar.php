<?php
/**
 * The sidebars containing the widget areas.
 *
 * @package Publication
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="widget-column">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-column -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="widget-column">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-column -->
	<?php endif; ?>
</div><!-- #secondary -->