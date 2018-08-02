<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spacewalker
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			?>
			<div class="nav-links">
				<div class="nav-previous">
					<?php previous_post_link(); ?>
				</div>
				<div class="nav-next">
					<?php next_post_link(); ?>
				</div>
			</div>
			<!-- If comments are open or we have at least one comment, load up the comment template. -->
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
