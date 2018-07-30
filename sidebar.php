<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spacewalker
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="sidebar-social">
		<h2>Connect with us</h2>
		<nav id="site-navigation" class="social-sidebar-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social-sidebar-menu',
				'menu_id'        => 'social-sidebar-menu',
				'link_before'		 => '<span class="screen-reader-text"',
				'link_after'		 => '</span>',
				'container'			 => '',
			) );
			?>
		</nav><!-- #site-navigation -->
		<?php echo do_shortcode(" [ninja_form id=2] "); ?>
	</div>
</aside><!-- #secondary -->
