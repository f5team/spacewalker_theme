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

<!-- Blog Loop -->

			<header>
				

				<div class="banner-animation">
					<h2 class="first-line-animation">Welcome to our community</h2>
					<div class="second-line-animation">
						<h1>Share your stories with us</h1>
					</div>
				</div>

			</header>

					<div class="blogsection">

						<div class="section-title">
							<h2>Awesome features</h2>
							<h3>New features</h3>
						</div>

					<?php $features_query = new WP_Query( array(
															'category_name' => 'features',
															'posts_per_page' => '3',
															'orderby' => 'rand',
													) );

								if ( $features_query->have_posts() ) :

								/* Start the Loop */
								while ( $features_query->have_posts() ) : $features_query->the_post();
										get_template_part( 'template-parts/content', 'excerpt' );
								endwhile;

								// the_posts_navigation();

									wp_reset_postdata();
						else :
								get_template_part( 'template-parts/content', 'none' );
						endif; ?>

					</div> <!-- end features loop -->

					<div class="blogsection">

						<div class="section-title">
							<h2>Challenge your friends</h2>
							<h3>New Planet Unlock</h3>
						</div>

						<?php $planet_query = new WP_Query( array(
																'category_name' => 'planet',
																'posts_per_page' => '3',
																'orderby' => 'rand',
														) );

									if ( $planet_query->have_posts() ) :

									/* Start the Loop */
									while ( $planet_query->have_posts() ) : $planet_query->the_post();
											get_template_part( 'template-parts/content', 'excerpt' );
									endwhile;

									// the_posts_navigation();

										wp_reset_postdata();
							else :
									get_template_part( 'template-parts/content', 'none' );
							endif; ?>

					</div> <!-- end planet loop -->

					<div class="blogsection">


											<div class="section-title">
												<h2>Get Healthy</h2>
												<h3>Healthy Tips</h3>
											</div>

					<?php $health_query = new WP_Query( array(
															'category_name' => 'health',
															'posts_per_page' => '3',
															'orderby' => 'rand',
													) );

								if ( $health_query->have_posts() ) :

								/* Start the Loop */
								while ( $health_query->have_posts() ) : $health_query->the_post();
										get_template_part( 'template-parts/content', 'excerpt' );
								endwhile;

								// the_posts_navigation();

									wp_reset_postdata();
						else :
								get_template_part( 'template-parts/content', 'none' );
						endif; ?>

					</div> <!-- end health loop -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer(); ?>
