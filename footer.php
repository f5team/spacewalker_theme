<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spacewalker
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="half-layout footer-layout">
			<div class="left-content">
				<span class="title-header-small">Once step a time</span>
				<h1 class="title-header-big">Start the fanstatic journey with free demo</h1>
			</div>
			<div class="right-content">
				<img src="http://localhost:8888/spacewalker/wp-content/uploads/2018/07/barcode.png" alt="qrcode">
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://spacewalker.com/', 'spacewalker' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'spacewalker' ), 'F5 Team.' );
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'spacewalker' ), 'spacewalker', '<a href="http://underscores.me/">TeamF5</a>' );
					echo 'Copyright ' . comicpress_copyright();
				?>
		</div><!-- .site-info -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social-menu',
				'menu_id'        => 'social-menu',
				'link_before'		 => '<span class="screen-reader-text"',
				'link_after'		 => '</span>',
				'container'			 => '',
			) );
			?>
		</nav><!-- #site-navigation -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
