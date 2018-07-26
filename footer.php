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
		<?php
                    // NEW STUFF HERE
                                    $footer_query = new WP_Query( array(
                                            'category_name' => 'footer',
                                            'post-per-page' => '1',
                                        ) );

                     // MODIFIED STUFF HERE
                            if ( $footer_query->have_posts() ) :

                    // ADDITIONAL MODIFICATION HERE:
                                /* Start the Loop */
                                while ( $footer_query->have_posts() ) : $footer_query->the_post();
                                    get_template_part( 'template-parts/content-footer', '' );
                                endwhile;

                    // ONE LAST ADDITION:
                                            wp_reset_postdata();
                            else :
                                get_template_part( 'template-parts/content-footer', 'none' );
                            endif;
                ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://spacewalker.com/', 'spacewalker' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'spacewalker' ), 'F5 Team.' );
				?>
			</a>
			<p>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'spacewalker' ), 'spacewalker', '<a href="http://underscores.me/">TeamF5</a>' );
					echo 'Copyright ' . comicpress_copyright();
				?>
			</p>
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
