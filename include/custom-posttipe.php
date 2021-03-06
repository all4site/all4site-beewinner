<?php

// Регистрируем Post Type

add_action('init', 'my_custom_init');
function my_custom_init()
{
    register_post_type('coorses', array(
        'labels' => array(
            // 'name'               => 'Мнения', // Основное название типа записи
            // 'singular_name'      => 'Мнение', // отдельное название записи типа Book
            // 'add_new'            => 'Добавить новую',
            // 'add_new_item'       => 'Добавить новую книгу',
            // 'edit_item'          => 'Редактировать книгу',
            // 'new_item'           => 'Новая книга',
            // 'view_item'          => 'Посмотреть книгу',
            // 'search_items'       => 'Найти книгу',
            // 'not_found'          => 'Книг не найдено',
            // 'not_found_in_trash' => 'В корзине книг не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Курсы',

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
				'supports' => array('title','excerpt','thumbnail', 'editor'),
				'taxonomies' => array('category'),
	  'show_in_rest' => true
    ));
}


?>