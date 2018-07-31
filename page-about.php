<?php
/**
 * Template Name: About Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spacewalker
 */

 get_header();
 ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">
      <div class="banner-animation">
<<<<<<< HEAD
        <h2 class="first-line-animation">Meet the team</h2>
        <div class="second-line-animation">
          <h1>We are so ready for new projects</h1>
        </div>
      </div>
=======
        <div class="first-line-animation">We are ...</div>
        <div class="second-line-animation">
          <span>so ready for new projects</span>
        </div>
      </div>

      <div class="page-title">
        <h2>Our passionate members</h2>
        <h1>Meet the team</h1>
      </div>
>>>>>>> jeannguyen

      <?php
            $about_query = new WP_Query( array(
                'post_type' => 'aboutus' ,
                'posts_per_page' => -1,
                'order' => 'asc',
                ) );

               if ( $about_query->have_posts() ) :

       // ADDITIONAL MODIFICATION HERE:
                   /* Start the Loop */
                   while ( $about_query->have_posts() ) : $about_query->the_post();
                       get_template_part( 'template-parts/content-about', get_post_format() );
                   endwhile;

       // ONE LAST ADDITION:
                               wp_reset_postdata();
               else :
                   get_template_part( 'template-parts/content-about', 'none' );
               endif;
      ?>

 		</main><!-- #main -->
    <div class ="seperator"></div>

 	</div><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
