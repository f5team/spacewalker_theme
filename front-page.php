<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spacewalker
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

      // NEW STUFF HERE
              $front_query = new WP_Query( array(
                      'category_name' => 'front-page',
                      'post-per-page' => '-1',
                      'order' => 'asc'
                  ) );

       // MODIFIED STUFF HERE
              if ( $front_query->have_posts() ) :

      // ADDITIONAL MODIFICATION HERE:
              /* Start the Loop */
              while ( $front_query->have_posts() ) : $front_query->the_post();
                  get_template_part( 'template-parts/content', get_post_format() );
              endwhile;

      // ONE LAST ADDITION:
                              wp_reset_postdata();
              else :
                  get_template_part( 'template-parts/content', 'none' );
              endif;
    ?>
		<?php

                    // NEW STUFF HERE
                                    $front_query = new WP_Query( array(
                                            'category_name' => 'front-page',
                                            'post-per-page' => '-1',
                                            'order' => 'asc'
                                        ) );

                     // MODIFIED STUFF HERE
                            if ( $front_query->have_posts() ) :

                    // ADDITIONAL MODIFICATION HERE:
                                /* Start the Loop */
                                while ( $front_query->have_posts() ) : $front_query->the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );
                                endwhile;

                    // ONE LAST ADDITION:
                                            wp_reset_postdata();
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                            ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
