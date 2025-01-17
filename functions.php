<?php
/**
 * Theme includes.
 *
 * @package Abraham
 */

/**
 * Define constants and load the Hybrid Core library.
 */
require get_parent_theme_file_path( 'lib/hybrid-core/hybrid.php' );

define( 'HYBRID_DIR', get_parent_theme_file_path( 'lib/hybrid-core/' ) );
define( 'HYBRID_URI', get_parent_theme_file_uri( 'lib/hybrid-core/' ) );
new Hybrid();

/**
 * Template hooks.
 */
require get_parent_theme_file_path( 'lib/tha-theme-hooks.php' );

/**
 * Initial theme setup.
 */
require get_parent_theme_file_path( 'inc/setup.php' );

/**
 * Customizer.
 */
require get_parent_theme_file_path( 'inc/customizer/Color.php' );
require get_parent_theme_file_path( 'inc/customizer/custom-styles.php' );
require get_parent_theme_file_path( 'inc/customizer/customizer.php' );

/**
 * Custom template adjustments.
 */
require get_parent_theme_file_path( 'inc/template-tweaks.php' );

/**
 * Custom template tags.
 */
require get_parent_theme_file_path( 'inc/template-tags.php' );

/**
 * Utility functions.
 */
require get_parent_theme_file_path( 'inc/utils.php' );

/**
 * Google Analytics.
 */
require get_parent_theme_file_path( 'inc/g-analytics.php' );


/**
 * The following includes can be overwritten in the child-theme.
 */
// Custom fonts.
require_once get_theme_file_path( 'inc/font-loader.php' );

// Custom template part styles.
require_once get_theme_file_path( 'inc/customizer/custom-header.php' );
require_once get_theme_file_path( 'inc/customizer/custom-background.php' );

// Custom Css class selectors.
require_once get_theme_file_path( 'inc/attr-trumps.php' );

// Extra wysiwyg actions.
require_once get_theme_file_path( 'inc/tiny-mce.php' );
