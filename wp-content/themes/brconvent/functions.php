<?php

/**
 * BR Convent Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since BR Convent Theme 1.0
 */

// Adds theme support for post formats.
if (! function_exists('twentytwentyfive_post_format_setup')) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_post_format_setup()
	{
		add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));
	}
endif;
add_action('after_setup_theme', 'twentytwentyfive_post_format_setup');

// Enqueues editor-style.css in the editors.
if (! function_exists('twentytwentyfive_editor_style')) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_editor_style()
	{
		add_editor_style(get_parent_theme_file_uri('assets/css/editor-style.css'));
	}
endif;
add_action('after_setup_theme', 'twentytwentyfive_editor_style');

// Registers custom block styles.
if (! function_exists('twentytwentyfive_block_styles')) :
	/**
	 * Registers custom block styles.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_block_styles()
	{
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __('Checkmark', 'twentytwentyfive'),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action('init', 'twentytwentyfive_block_styles');

// Registers pattern categories.
if (! function_exists('twentytwentyfive_pattern_categories')) :
	/**
	 * Registers pattern categories.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_pattern_categories()
	{

		register_block_pattern_category(
			'twentytwentyfive_page',
			array(
				'label'       => __('Pages', 'twentytwentyfive'),
				'description' => __('A collection of full page layouts.', 'twentytwentyfive'),
			)
		);

		register_block_pattern_category(
			'twentytwentyfive_post-format',
			array(
				'label'       => __('Post formats', 'twentytwentyfive'),
				'description' => __('A collection of post format patterns.', 'twentytwentyfive'),
			)
		);
	}
endif;
add_action('init', 'twentytwentyfive_pattern_categories');

// Registers block binding sources.
if (! function_exists('twentytwentyfive_register_block_bindings')) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_register_block_bindings()
	{
		register_block_bindings_source(
			'twentytwentyfive/format',
			array(
				'label'              => _x('Post format name', 'Label for the block binding placeholder in the editor', 'twentytwentyfive'),
				'get_value_callback' => 'twentytwentyfive_format_binding',
			)
		);
	}
endif;
add_action('init', 'twentytwentyfive_register_block_bindings');

// Registers block binding callback function for the post format name.
if (! function_exists('twentytwentyfive_format_binding')) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since BR Convent Theme 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function twentytwentyfive_format_binding()
	{
		$post_format_slug = get_post_format();

		if ($post_format_slug && 'standard' !== $post_format_slug) {
			return get_post_format_string($post_format_slug);
		}
	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles' );
function twentytwentyfive_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Add classic PHP page templates to a block theme.
 */
function my_theme_add_page_templates_to_block_theme( $post_templates ) {
    // Add your custom template
    $post_templates['about-page.php'] = 'About Page';
	$post_templates['academic-page.php'] = 'Academics Page';
	$post_templates['front-page.php'] = 'Front Page';
	$post_templates['admission-page.php'] = 'Admission Page';
    
    // You can add more here if needed
    // $post_templates['another-template.php'] = 'Another Custom Layout';

    return $post_templates;
}
add_filter( 'theme_page_templates', 'my_theme_add_page_templates_to_block_theme', 11, 4 );


// functions.php in brconvent child theme

add_action( 'wp_enqueue_scripts', 'brconvent_child_enqueue_assets', 20 );

/**
 * Enqueue parent and child theme styles and JavaScript.
 */
function brconvent_child_enqueue_assets() {

    // Load parent style
    wp_enqueue_style(
        'twentytwentyfive-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Load child style
    wp_enqueue_style(
        'brconvent-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentytwentyfive-parent-style' ),
        wp_get_theme()->get( 'Version' )
    );

    // Load custom child JS (optional)
    wp_enqueue_script(
        'brconvent-main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}

