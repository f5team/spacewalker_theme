<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package spacewalker
*/

?>

<article id="<?php the_title(); ?>" <?php post_class(); ?>>

      <?php spacewalker_post_thumbnail(); ?>

      <div class="entry-content">
        <?php
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
          ?>
        </div><!-- .entry-content -->


    </article><!-- #post-<?php the_ID(); ?> -->
