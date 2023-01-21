<?php
/**
 * Nadia & Naaz Perfumes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nadia_&_Naaz_Perfumes
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nangtllc_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Nadia & Naaz Perfumes, use a find and replace
	 * to change 'nangtllc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('nangtllc', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'nangtllc'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nangtllc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'nangtllc_setup');
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nangtllc_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nangtllc_content_width', 640);
}
add_action('after_setup_theme', 'nangtllc_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nangtllc_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'nangtllc'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'nangtllc'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'nangtllc_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function nangtllc_scripts()
{
	wp_enqueue_style('nangtllc-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('nangtllc-style', 'rtl', 'replace');

	wp_enqueue_script('nangtllc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'nangtllc_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
function get_custom_logo_url()
{
	$custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	return $image[0];
}
function new_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// Register Custom Faqs
function custom_post_type()
{

	$labels = array(
		'name' => _x('faqs', 'Faqs General Name', 'text_domain'),
		'singular_name' => _x('faq', 'Faqs Singular Name', 'text_domain'),
		'menu_name' => __('Faqs', 'text_domain'),
		'name_admin_bar' => __('Faqs', 'text_domain'),
		'archives' => __('Faq Archives', 'text_domain'),
		'attributes' => __('Faq Attributes', 'text_domain'),
		'parent_item_colon' => __('Parent Faq:', 'text_domain'),
		'all_items' => __('All Faqs', 'text_domain'),
		'add_new_item' => __('Add New Faq', 'text_domain'),
		'add_new' => __('Add New', 'text_domain'),
		'new_item' => __('New Faq', 'text_domain'),
		'edit_item' => __('Edit Faq', 'text_domain'),
		'update_item' => __('Update Faq', 'text_domain'),
		'view_item' => __('View Faq', 'text_domain'),
		'view_items' => __('View Faqs', 'text_domain'),
		'search_items' => __('Search Faq', 'text_domain'),
		'not_found' => __('Not found', 'text_domain'),
		'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
		'featured_image' => __('Featured Image', 'text_domain'),
		'set_featured_image' => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image' => __('Use as featured image', 'text_domain'),
		'insert_into_item' => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list' => __('Faqs list', 'text_domain'),
		'items_list_navigation' => __('Faqs list navigation', 'text_domain'),
		'filter_items_list' => __('Filter items list', 'text_domain'),

	);
	$args = array(
		'label' => __('faq', 'text_domain'),
		'description' => __('frequently asked questions', 'text_domain'),
		'labels' => $labels,
		'supports' => array('title', 'editor'),
		'taxonomies' => array('category', 'post_tag'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'menu_icon' => 'dashicons-format-status',
	);
	register_post_type('faqs', $args);

}
add_action('init', 'custom_post_type', 0);
// Register Custom Post Type
function custom_post_type_members()
{

	$labels = array(
		'name' => _x('Members', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Member', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Teams', 'text_domain'),
		'name_admin_bar' => __('Members', 'text_domain'),
		'archives' => __('Member Archives', 'text_domain'),
		'attributes' => __('Member Attributes', 'text_domain'),
		'parent_item_colon' => __('Parent Member:', 'text_domain'),
		'all_items' => __('All Members', 'text_domain'),
		'add_new_item' => __('Add New Member', 'text_domain'),
		'add_new' => __('Add New Member', 'text_domain'),
		'new_item' => __('New Member', 'text_domain'),
		'edit_item' => __('Edit Member', 'text_domain'),
		'update_item' => __('Update Member', 'text_domain'),
		'view_item' => __('View Member', 'text_domain'),
		'view_items' => __('View Members', 'text_domain'),
		'search_items' => __('Search Member', 'text_domain'),
		'not_found' => __('Not found', 'text_domain'),
		'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
		'featured_image' => __('Member Image', 'text_domain'),
		'set_featured_image' => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image' => __('Use as featured image', 'text_domain'),
		'insert_into_item' => __('Insert into Member', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this Member', 'text_domain'),
		'items_list' => __('Members list', 'text_domain'),
		'items_list_navigation' => __('Members list navigation', 'text_domain'),
		'filter_items_list' => __('Filter Members list', 'text_domain'),
	);
	$args = array(
		'label' => __('member', 'text_domain'),
		'description' => __('Teams of company', 'text_domain'),
		'labels' => $labels,
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-groups',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('team', $args);

}
add_action('init', 'custom_post_type_members', 0);

/*
 * Plugin Name: My custom admin page
 * Description: Adds a custom admin pages with sample styles and scripts.
 */

function my_admin_menu()
{
	$icon = '<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#E1B377" stroke="none"> <path d="M1330 2895 c0 -481 2 -875 5 -875 3 0 84 42 180 93 l175 92 0 448 c0 246 3 447 6 447 5 0 285 -157 689 -387 116 -66 300 -171 410 -233 110 -63 226 -128 258 -146 l57 -33 0 222 0 223 -885 512 c-486 282 -887 512 -890 512 -3 0 -5 -394 -5 -875z"/> <path d="M4093 3594 l-183 -106 0 -594 0 -594 -62 32 c-35 18 -66 34 -71 36 -4 2 -6 -96 -5 -219 l3 -222 249 -144 c137 -79 250 -142 252 -140 2 2 3 466 2 1030 l-3 1026 -182 -105z"/> <path d="M670 2610 l0 -990 83 49 c45 26 126 74 180 105 l97 57 0 564 0 565 76 -45 c42 -25 78 -45 80 -45 2 0 3 100 2 222 l-3 223 -254 142 c-139 79 -255 143 -257 143 -2 0 -4 -445 -4 -990z"/> <path d="M3430 3202 l-175 -109 -3 -477 c-2 -394 -5 -477 -16 -473 -7 3 -322 183 -699 401 -377 218 -688 396 -691 396 -3 0 -6 -98 -6 -217 l0 -218 48 -26 c40 -21 409 -234 1517 -872 l200 -115 3 454 c1 250 1 659 0 910 l-3 455 -175 -109z"/> </g> </svg>';
	add_menu_page(
		__('Nadia & Naaz', 'my-textdomain'),
		__('Nadia & Naaz', 'my-textdomain'),
		'manage_options',
		'sample-page',
		'my_admin_page_contents',
		'data:image/svg+xml;base64,' . base64_encode($icon),

		3
	);
}
add_action('admin_menu', 'my_admin_menu');

function my_admin_page_contents()
{
	?>
	<form method="POST" action="options.php">
		<?php
		settings_fields('sample-page');
		do_settings_sections('sample-page');
		submit_button();
		?>
	</form>
<?php
}


add_action('admin_init', 'my_settings_init');

function my_settings_init()
{

	add_settings_section(
		'sample_page_setting_section',
		__('Settings', 'my-textdomain'),
		'my_setting_section_callback_function',
		'sample-page'
	);
	add_settings_field(
		'is_maintenance',
		__('Maintenance Mode', 'my-textdomain'),
		'is_maintenance_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'copyright',
		__('Copyright Text', 'my-textdomain'),
		'copyright_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'fb_link',
		__('Facebook Link', 'my-textdomain'),
		'fb_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'ig_link',
		__('Instagram Link', 'my-textdomain'),
		'in_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'ln_link',
		__('LinkedIn Link', 'my-textdomain'),
		'linkedin_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'tr_link',
		__('Twitter Link', 'my-textdomain'),
		'twitter_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'wp_link',
		__('WhatsApp', 'my-textdomain'),
		'wp_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);
	add_settings_field(
		'yt_link',
		__('Youtube Link', 'my-textdomain'),
		'yt_link_markup',
		'sample-page',
		'sample_page_setting_section'
	);

	register_setting('sample-page', 'is_maintenance', 'rudr_sanitize_checkbox');
	register_setting('sample-page', 'copyright');
	register_setting('sample-page', 'fb_link');
	register_setting('sample-page', 'ig_link');
	register_setting('sample-page', 'ln_link');
	register_setting('sample-page', 'tr_link');
	register_setting('sample-page', 'yt_link');
	register_setting('sample-page', 'wp_link');



}

function rudr_sanitize_checkbox($value)
{
	return 'on' === $value ? 'yes' : 'no';
}
function my_setting_section_callback_function()
{
	echo '';
}

function copyright_markup()
{
	?>
	<input type="text" id="copyright" name="copyright" value="<?php echo get_option('copyright'); ?>">
<?php
}
function fb_link_markup()
{
	?>
	<input type="text" id="fb_link" name="fb_link" value="<?php echo get_option('fb_link'); ?>">
<?php
}
function in_link_markup()
{
	?>
	<input type="text" id="ig_link" name="ig_link" value="<?php echo get_option('ig_link'); ?>">
<?php
}
function twitter_link_markup()
{
	?>
	<input type="text" id="tr_link" name="tr_link" value="<?php echo get_option('tr_link'); ?>">
<?php
}
function linkedin_link_markup()
{
	?>
	<input type="text" id="ln_link" name="ln_link" value="<?php echo get_option('ln_link'); ?>">
<?php
}
function yt_link_markup()
{
	?>
	<input type="text" id="yt_link" name="yt_link" value="<?php echo get_option('yt_link'); ?>">
<?php
}
function wp_link_markup()
{
	?>
	<input type="text" id="wp_link" name="wp_link" value="<?php echo get_option('wp_link'); ?>">
<?php
}


function is_maintenance_markup($args)
{
	$value = get_option('is_maintenance');
	?>
	<label>
		<input type="checkbox" name="is_maintenance" <?php checked($value, 'yes') ?> /> Yes
	</label>
<?php
}
// Register Custom Taxonomy
function product_custom_taxonomy_Item()
{
	$labels = array(
		'name' => 'Brands',
		'singular_name' => 'Brand',
		'menu_name' => 'Brands',
		'all_items' => 'All Brands',
		'parent_item' => 'Parent Brand',
		'parent_item_colon' => 'Parent Brand:',
		'new_item_name' => 'New Brand Name',
		'add_new_item' => 'Add New Brand',
		'edit_item' => 'Edit Brand',
		'update_item' => 'Update Brand',
		'separate_items_with_commas' => 'Separate Brand with commas',
		'search_items' => 'Search Brands',
		'add_or_remove_items' => 'Add or remove Brands',
		'choose_from_most_used' => 'Choose from the most used Brands',
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'supports' => array('thumbnail'),

	);
	register_taxonomy('item', 'product', $args);
}
add_action('init', 'product_custom_taxonomy_item');
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
	echo '<style>
  #wpadminbar, #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap{
	background-color: #051f31;
   }
  </style>';
}