<?php

function Nebula_theme_support(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'Nebula_theme_support');

function custom_enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Lilita+One&family=Rowdies:wght@300;400;700&display=swap", array(), null);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_google_fonts');

function Nebula_style(){
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('Nebula_style', get_template_directory_uri() ."/style.css", array(), '1.0', 'all');
    wp_enqueue_style( 'phosphor-icons', 'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css' );
}
add_action('wp_enqueue_scripts', 'Nebula_style');

register_nav_menus(array(
    'primary' => "primary",
    'secondary' => "Secondary Menu"
));

function ln_style_init( $init ) {
    $style = "Lilita One=Lilita One;" .
    "Arial=arial,helvetica,sans-serif;";
    $init['font_formats'] = $style;
    return $init;
}
add_filter( 'tiny_mce_before_init', 'ln_style_init' );

function nebula_register_member_cpt() {
    $labels = array(
        'name' => 'Members',
        'singular_name' => 'Member',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Member',
        'new_item' => 'New Member',
        'view_item' => 'View Member',
        'search_items' => 'Search Members',
        'not_found' => 'No members found',
        'not_found_in_trash' => 'No members found in trash',
        'menu_name' => 'Members'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'members'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('member', $args);
}
add_action('init', 'nebula_register_member_cpt');

?>