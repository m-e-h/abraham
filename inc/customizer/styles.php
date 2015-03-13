<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package abraham
 */


add_action( 'customizer_library_styles', 'customizer_library_abraham_styles' );

add_action( 'wp_head', 'abraham_display_customizations', 11 );



if ( ! function_exists( 'customizer_library_abraham_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_abraham_styles() {

	// Primary Color
	$setting = 'primary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

	$color = sanitize_hex_color( $mod );
	$rgb = join( ', ', hybrid_hex_to_rgb( $color ) );

		$simple_color_adjuster = new Simple_Color_Adjuster;
		$color50 	= $simple_color_adjuster->lighten( $color, 45 );
		$color100 	= $simple_color_adjuster->lighten( $color, 40 );
		$color200 	= $simple_color_adjuster->lighten( $color, 30 );
		$color300 	= $simple_color_adjuster->lighten( $color, 20 );
		$color400 	= $simple_color_adjuster->lighten( $color, 10 );
		$color500 	= $color;
		$color600 	= $simple_color_adjuster->darken( $color, 10 );
		$color700 	= $simple_color_adjuster->darken( $color, 20 );
		$color800 	= $simple_color_adjuster->darken( $color, 30 );
		$color900 	= $simple_color_adjuster->darken( $color, 40 );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'a'
			],
			'declarations' => [
				'color' => $color600
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'a:hover'
			],
			'declarations' => [
				'color' => $color400
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.t-primary-base'
			],
			'declarations' => [
				'color' => $color500
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.t-primary-light'
			],
			'declarations' => [
				'color' => $color400
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.t-primary-dark'
			],
			'declarations' => [
				'color' => $color600
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.comment-reply-link,
				button,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
				.button'
			],
			'declarations' => [
				'background-color' => $color500
			]
		] );


		Customizer_Library_Styles()->add( [
			'selectors' => [
				'button:hover,
				.comment-reply-link:hover,
				input[type="button"]:hover,
				input[type="reset"]:hover,
				input[type="submit"]:hover,
				.button:hover'
			],
			'declarations' => [
				'background-color' => $color400
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'button:active,
				.sidebar-primary__widget-title,
				.comment-reply-link:active,
				input[type="button"]:active,
				input[type="reset"]:active,
				input[type="submit"]:active,
				.button:active'
			],
			'declarations' => [
				'background-color' => $color600
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'input[type="email"]:focus,
				input[type="number"]:focus,
				input[type="search"]:focus,
				input[type="text"]:focus,
				input[type="tel"]:focus,
				input[type="url"]:focus,
				input[type="password"]:focus,
				textarea:focus,
				select:focus'
			],
			'declarations' => [
				'border-color' => $color500
			]
		] );

	}




	// Secondary Color
	$setting = 'secondary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );
		$rgb = join( ', ', hybrid_hex_to_rgb( $color ) );

		$simple_color_adjuster = new Simple_Color_Adjuster;
		$color50 	= $simple_color_adjuster->lighten( $color, 45 );
		$color100 	= $simple_color_adjuster->lighten( $color, 40 );
		$color200 	= $simple_color_adjuster->lighten( $color, 30 );
		$color300 	= $simple_color_adjuster->lighten( $color, 20 );
		$color400 	= $simple_color_adjuster->lighten( $color, 10 );
		$color500 	= $color;
		$color600 	= $simple_color_adjuster->darken( $color, 10 );
		$color700 	= $simple_color_adjuster->darken( $color, 20 );
		$color800 	= $simple_color_adjuster->darken( $color, 30 );
		$color900 	= $simple_color_adjuster->darken( $color, 40 );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.text-highlight,
				blockquote,
				.t-secondary-base,
				.dropcap:first-letter'
			],
			'declarations' => [
				'color' => $color600
			]
		] );

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.button.secondary,
				.search-form button,
				.sidebar-footer__widget'
			],
			'declarations' => [
				'background-color' => $color500
			]
		] );
		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.button.secondary:hover,
				.search-form button:hover'
			],
			'declarations' => [
				'background-color' => $color400
			]
		] );
		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.button.secondary:active,
				.search-form button:active,
				.site-info,
				.sidebar-footer__widget-title'
			],
			'declarations' => [
				'background-color' => $color700
			]
		] );

	}




	// Primary Font
	$setting = 'primary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'body'
			],
			'declarations' => [
				'font-family' => $stack
			]
		] );
	}




	// Secondary Font
	$setting = 'secondary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'h1, h2, h3, h4, h5, h6, .dropcap:first-letter'
			],
			'declarations' => [
				'font-family' => $stack
			]
		] );

	}




	// Decorations
	$setting = 'cards';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.entry, .widget, .comments'
			],
			'declarations' => [
				'background' => 'none',
				'box-shadow' => 'none',
				'border' => '0'
			]
		] );
	}




	// Card Shadows
	$setting = 'shadows';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( [
			'selectors' => [
				'.entry, .widget, .comments'
			],
			'declarations' => [
				'box-shadow' => 'none',
				'border' => '0'
			]
		] );
	}
}
endif;




if ( ! function_exists( 'abraham_display_customizations' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can
 * print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function abraham_display_customizations() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"abraham-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;
