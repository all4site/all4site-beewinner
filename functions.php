<?php
//INCLUDE
require get_template_directory(). '/include/style.php';
require get_template_directory(). '/include/customize.php';
require get_template_directory(). '/include/excerpt.php';
require get_template_directory(). '/include/menu-setup.php';
require get_template_directory(). '/include/views-function.php';
require get_template_directory(). '/include/uploadSvg.php';
require get_template_directory(). '/include/custom-posttipe.php';
require get_template_directory(). '/include/pagination.php';
require get_template_directory(). '/include/autoAddCategory.php';



// Hooks
add_action('wp_enqueue_scripts', 'all4site_enqueue');
add_action('init', 'all4site_jquery_register');
add_action('customize_register', 'all4site_customize_register');
add_action('init', 'all4site_register_menu');
add_action('save_post', 'categoryAdd');

// Filter
add_filter('excerpt_length', 'all4site_excerpt_word_limit');
add_filter('excerpt_more', 'all4site_new_excerpt_more');
add_filter('upload_mimes', 'all4site_upload_allow_types');


//Setup
add_theme_support('post-thumbnails');

// disable srcset on frontend
  function disable_wp_responsive_images() {
	return 1;
  }
  add_filter('max_srcset_image_width', 'disable_wp_responsive_images');









