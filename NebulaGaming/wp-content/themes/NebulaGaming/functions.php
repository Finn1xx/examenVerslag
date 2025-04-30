<?php
function nebula_setup() {
    add_theme_support('post-thumbnails');
    
    register_nav_menus([
        'primary' => 'Primary',
        'secondary' => 'Secondary Menu'
    ]);
}
add_action('after_setup_theme', 'nebula_setup');

function nebula_enqueue_resources() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lilita+One&family=Rowdies:wght@300;400;700&display=swap', [], null);
    
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    
    wp_enqueue_style('nebula-style', get_template_directory_uri() . '/style.css', [], '1.0', 'all');
    
    wp_enqueue_style('phosphor-icons', 'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css');
}
add_action('wp_enqueue_scripts', 'nebula_enqueue_resources');

function nebula_register_custom_post_types() {
    register_post_type('member', [
        'labels' => [
            'name' => 'Members',
            'singular_name' => 'Member',
            'add_new' => 'Add New Member',
            'menu_name' => 'Members'
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'members'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
    
    register_post_type('matches', [
        'labels' => [
            'name' => 'Matches',
            'singular_name' => 'Match',
            'menu_name' => 'Matches',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'matches'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
    ]);
}
add_action('init', 'nebula_register_custom_post_types');

function nebula_display_recent_matches($count = 5) {
    $matches_query = new WP_Query([
        'post_type' => 'matches',
        'posts_per_page' => $count,
        'orderby' => 'date',
        'order' => 'DESC'
    ]);
    
    if (!$matches_query->have_posts()) {
        return '<p>No matches found</p>';
    }
    
    $output = '<div class="recentMatchesWidget">';
    
    while ($matches_query->have_posts()) {
        $matches_query->the_post();
        
        $output .= '<div class="recentMatchItem">';
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
    
    return $output;
}