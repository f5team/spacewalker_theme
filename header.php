<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spacewalker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spacewalker' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$spacewalker_description = get_bloginfo( 'description', 'display' );
				if ( $spacewalker_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $spacewalker_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class ="screen-reader-text"><?php esc_html_e( 'Menu', 'trial' ); ?></span></button>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
					'container'			 => '',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->
	<?php if(is_front_page() ): ?>
	<div class="subMenu">
		<div class="inner">
			<a href="#section1" class="subNavBtn"><span>Intro</span></a>
			<a href="#section2" class="subNavBtn"><span>Story</span></a>
			<a href="#section3" class="subNavBtn"><span>Features</span></a>
			<a href="#section4" class="subNavBtn end"><span>Screenshots</span></a>
		</div>
	</div>

	<!-- <div class="subMenu">
		<div class="inner">
			<a href="#section1" class="subNavBtn">Section 1</a>
			<a href="#section2" class="subNavBtn">Section 2</a>
			<a href="#section3" class="subNavBtn">Section 3</a>
			<a href="#section4" class="subNavBtn">Section 4</a>
		</div>
	</div> -->
<?php endif;?>
	<div id="content" class="site-content">
