<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four Child
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Enqueue styles.css
 */

function twentytwentyfour_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

 /**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_child_block_styles' ) )
{

	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_child_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'         => 'add-padding',
				'label'        => __( 'Add padding', 'twentytwentyfourchild' ),
				'inline_style' => "
				.is-style-add-padding {
					padding-top: var(--wp--preset--spacing--40);
					padding-bottom: var(--wp--preset--spacing--40);
				}"
				)
			);
			
			register_block_style(
				'core/columns',
				array(
					'name'         => 'reverse-columns',
					'label'        => __( 'Reverse Columns on Mobile', 'twentytwentyfourchild' ),
					'inline_style' => '
					@media (max-width: 781px) {
						.is-style-reverse-columns {
							flex-direction: column-reverse;
						}
					}',
				),
			);
		}
}

add_action( 'init', 'twentytwentyfour_child_block_styles' );


if ( ! function_exists( 'twentytwentyfour_child_pattern_categories' ) )
{
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_child_pattern_categories() {

		register_block_pattern_category(
			'AB',
			array(
				'label'       => _x( 'AB', 'Block pattern category' ),
				'description' => __( 'A collection of patterns for AB.' ),
			)
		);
	}
}

add_action( 'init', 'twentytwentyfour_child_pattern_categories' );
