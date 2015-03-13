<?php
/**
 * @package Abraham
 */

if ( has_nav_menu( 'social' ) ) :

	wp_nav_menu( [
		'theme_location'  => 'social',
		'container'       => 'div',
		'container_id'    => 'menu-social',
		'container_class' => 'menu menu-social',
		'menu_id'         => 'menu-social-list',
		'menu_class'      => 'menu-social__list',
		'depth'           => 1,
		'link_before'     => '<span class="screen-reader-text">',
		'link_after'      => '</span>',
		'fallback_cb'     => '',
	] );

endif; // End check for menu.
