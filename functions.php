<?php
// регистрируем JS
add_action('wp_enqueue_scripts', 'true_scrypt_frontend');
function true_scrypt_frontend()
{

	wp_enqueue_script('scripts', esc_url(get_template_directory_uri()) . '/sources/js/scripts.js');
}

// регистрируем CSS
add_action('wp_enqueue_scripts', 'true_style_frontend');
function true_style_frontend()
{
	wp_dequeue_style('global-styles-inline');

	wp_enqueue_style('styles', esc_url(get_template_directory_uri()) . '/sources/css/styles.css');
	wp_enqueue_style('normalize', esc_url(get_template_directory_uri()) . '/sources/css/normalize.css');
}

// Удаление лишней строчки
add_filter('wp_img_tag_add_auto_sizes', '__return_false');

// Удаление глобальных стилей
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
add_action('wp_enqueue_scripts', function () {
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('classic-theme-styles');
});
add_filter('should_load_separate_core_block_assets', '__return_true');

// удаляем лишнее для валидности
add_action(
	'after_setup_theme',
	function () {
		add_theme_support('html5', ['script', 'style']);
	}
);

// миниатюры  
add_theme_support('post-thumbnails');

add_image_size('small-thumbnail', 430, 242, true);
add_image_size('medium-thumbnail', 645, 363, true);
add_image_size('medium-large-thumbnail-single', 636, 426, true);
add_image_size('medium-large-thumbnail', 860, 484, true);

// включаем поддержку меню
// if (function_exists('add_theme_support')) {
// 	add_theme_support('menus');
// 	add_theme_support('title-tag');
// }


// include custom functions
require get_template_directory() . '/inc/custom_functions.php';
require get_template_directory() . '/inc/register_post.php';
