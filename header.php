<?php
/**
 * The header for our theme
 *
 *
 *
 * @package DDMP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
	<header >
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="#">Navbar w/ text</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<?php
					wp_nav_menu( array(
						'menu'   => 'main-menu',
						'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
					?>
				<div id="menu-search">
					<i class="fas fa-search"></i>
					<div class="d-none"><?php get_search_form() ?></div>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
	<div class="row">

