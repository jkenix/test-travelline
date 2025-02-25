<?php
// создаем новый тип записи [Комната]
add_action('init', 'register_post_room');
function register_post_room()
{
    $labels = array(
        'name' => 'Комнаты',
        'singular_name' => 'Комната', // админ панель Добавить->Функцию
        'add_new' => 'Добавить комнату',
        'add_new_item' => 'Добавить комнату', // заголовок тега <title>
        'edit_item' => 'Редактировать комнату',
        'new_item' => 'Новая комната',
        'all_items' => 'Все комнаты',
        'view_item' => 'Просмотр комнаты на сайте',
        'search_items' => 'Искать комнаты',
        'not_found' => 'Комнат не найдено.',
        'not_found_in_trash' => 'В корзине нет комнат.',
        'parent_item_colon' => 'Родитель',
        'menu_name' => 'Комнаты' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'map_meta_cap' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-building', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'show_in_rest' => true
    );
    register_post_type('rooms', $args);
}
// регистрируем для типа записи [Комната] таксономию
add_action('init', 'additional_taxonomies_room');
function additional_taxonomies_room()
{
    register_taxonomy_for_object_type('post_tag', 'rooms');
    register_taxonomy_for_object_type('category', 'rooms');
}

?>
