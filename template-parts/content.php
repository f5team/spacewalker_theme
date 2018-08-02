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
                  <article id="<?php the_title(); ?>" <?php post_class(); ?>> <?php
             else:
                ?>  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php
            endif;
        ?>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
                                           elseif (is_front_page() ) :
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
                                   if(is_front_page()):

                                    else:
                                        spacewalker_posted_on();
				spacewalker_posted_by();
                                    endif;
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php spacewalker_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if(is_front_page()):
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
                    else: spacewalker_entry_footer();
                endif;
                ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<div class ="seperator"></div>

<?php
  if(is_front_page()):
    ?>
  </section>
<?php endif; ?>
