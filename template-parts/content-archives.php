<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spacewalker
 */

?>
        <?php
            if(is_front_page()):
                ?>
                <section class="<?php the_title(); ?>">
									<div class="inner ">
                  <article id="<?php the_title(); ?>" <?php post_class(); ?>> <?php
             else:
                ?>  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php
            endif;
        ?>
	<?php spacewalker_post_thumbnail(); ?>

  <header>
    <?php
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>
  </header>


	<div class="entry-content">
		<?php
		if(is_archive()):
      the_excerpt();
			// the_content( sprintf(
			// 	wp_kses(
			// 		/* translators: %s: Name of current post. Only visible to screen readers */
			// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'spacewalker' ),
			// 		array(
			// 			'span' => array(
			// 				'class' => array(),
			// 			),
			// 		)
			// 	),
			// 	get_the_title()
			// ) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spacewalker' ),
				'after'  => '</div>',
			) );
		else:
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'spacewalker' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spacewalker' ),
				'after'  => '</div>',
			) );
		endif;

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
                if (is_front_page()):
                    else:
                    // spacewalker_entry_footer();
                    the_tags( 'Tags: ', ', ', '<br />' );
                endif;
                ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
						if (is_front_page()):
							?>
							<div class ="seperator"></div>

							<?php
						endif;
						?>

<?php
  if(is_front_page()):
    ?>
	</div>
  </section>
<?php endif; ?>
