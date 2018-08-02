<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spacewalker
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header> -->

	<?php spacewalker_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="content-wrap">
		<?php
		the_content();
		the_title( '<h1 class="entry-title">', '</h1>' );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spacewalker' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
