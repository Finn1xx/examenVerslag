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


function nebula_register_matches_post_type() {
    $labels = array(
        'name'               => 'Matches',
        'singular_name'      => 'Match',
        'menu_name'          => 'Matches',
        'add_new'            => 'Add New Match',
        'add_new_item'       => 'Add New Match',
        'edit_item'          => 'Edit Match',
        'new_item'           => 'New Match',
        'view_item'          => 'View Match',
        'search_items'       => 'Search Matches',
        'not_found'          => 'No matches found',
        'not_found_in_trash' => 'No matches found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'matches'),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-calendar-alt',
        'show_in_rest'        => true,
    );

    register_post_type('matches', $args);
}
add_action('init', 'nebula_register_matches_post_type');


function nebula_display_recent_matches($count = 5) {
    $output = '';
    
    $args = array(
        'post_type' => 'matches',
        'posts_per_page' => $count,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $matches_query = new WP_Query($args);
    
    if ($matches_query->have_posts()) {
        $output .= '<div class="recent-matches-widget">';
        
        while ($matches_query->have_posts()) {
            $matches_query->the_post();
            
            $output .= '<div class="recent-match-item">';
            $output .= '<h4>' . get_the_title() . '</h4>';
            
            if (function_exists('get_field')) {
                if (get_field('match_date')) {
                    $output .= '<div class="match-date">' . get_field('match_date') . '</div>';
                }
                
                $output .= '<div class="match-meta">';
                if (get_field('game')) {
                    $output .= '<span class="match-game">' . get_field('game') . '</span>';
                }
                if (get_field('team')) {
                    $output .= '<span class="match-team"> | Team: ' . get_field('team') . '</span>';
                }
                $output .= '</div>';
            }
            
            $output .= '</div>';
        }
        
        $output .= '</div>';
        wp_reset_postdata();
    } else {
        $output = '<p>No matches found</p>';
    }
    
    return $output;
}

// Usage example: echo nebula_display_recent_matches();

?>