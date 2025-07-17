<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package klaris
 */

?>

<header id="masthead" class="border-b border-gray-200 dark:border-gray-700 p-4 flex items-center justify-between">

	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-4xl font-extrabold"><?php bloginfo( 'name' ); ?></a>
	</h1>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'klaris' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="false" class="hidden"><?php esc_html_e( 'Primary Menu', 'klaris' ); ?></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s flex gap-4" aria-label="submenu">%3$s</ul>',
				'menu_class'     => 'font-bold uppercase', // Add a class for
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
