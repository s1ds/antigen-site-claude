<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Antigeneric functions and definitions
 *
 * @package Antigeneric
 * @since Antigeneric 1.0
 */

if ( ! function_exists( 'antigeneric_support' ) ) :
	function antigeneric_support() {
		add_editor_style( 'style.css' );
		load_theme_textdomain( 'antigeneric' );
	}
endif;
add_action( 'after_setup_theme', 'antigeneric_support' );


if ( ! function_exists( 'antigeneric_styles' ) ) :
	function antigeneric_styles() {
		wp_register_style(
			'antigeneric-style',
			get_stylesheet_directory_uri() . '/style.css',
			[],
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style( 'antigeneric-style' );

		wp_enqueue_style(
			'antigeneric-fonts',
			'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap',
			[],
			null
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'antigeneric_styles' );


if ( ! function_exists( 'antigeneric_editor_fonts' ) ) :
	function antigeneric_editor_fonts() {
		wp_enqueue_style(
			'antigeneric-fonts-editor',
			'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap',
			[],
			null
		);
	}
endif;
add_action( 'enqueue_block_editor_assets', 'antigeneric_editor_fonts' );


if ( ! function_exists( 'antigeneric_block_styles' ) ) :
	function antigeneric_block_styles() {
		register_block_style( 'core/group', [
			'name'  => 'force-card',
			'label' => __( 'Force Card', 'antigeneric' ),
		] );
		register_block_style( 'core/group', [
			'name'  => 'evidence-block',
			'label' => __( 'Evidence Block', 'antigeneric' ),
		] );
		register_block_style( 'core/group', [
			'name'  => 'torn-signal',
			'label' => __( 'Torn Signal', 'antigeneric' ),
		] );
		register_block_style( 'core/cover', [
			'name'  => 'insurgence',
			'label' => __( 'Insurgence', 'antigeneric' ),
		] );
	}
endif;
add_action( 'init', 'antigeneric_block_styles' );
