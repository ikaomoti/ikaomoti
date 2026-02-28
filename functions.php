<?php
function add_files()
{
    wp_enqueue_style('reset-style', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet');
    wp_enqueue_style('main-style', get_theme_file_uri('/dist/css/style.css'));
    wp_enqueue_script('main-script', get_theme_file_uri() . '/dist/js/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'add_files');

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'gloval-nav-menu' => 'グローバルメニュー',
            'footer-nav-menu' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

function create_skill_post_type()
{
    register_post_type('skill', array(
        'labels' => array(
            'name' => 'Skills',
            'singular_name' => 'Skill'
        ),
        'public' => true,
        'has_archive' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title'),
        'show_in_rest' => true
    ));
}
add_action('init', 'create_skill_post_type');
