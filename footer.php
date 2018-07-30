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

		<nav id="site-navigation" class="footer-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'footer-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://spacewalker.com/', 'spacewalker' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'spacewalker' ), 'F5 Team.' );
				?>
			</a> -->
			<p>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'spacewalker' ), 'spacewalker', '<a href="http://underscores.me/">TeamF5</a>' );
					echo 'Copyright ' . comicpress_copyright() . '. All rights reserved.';
				?>
			</p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
