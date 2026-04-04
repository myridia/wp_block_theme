<?php

// Myridia Wp Block Theme

// Enqueue theme styles
function gt_enqueue_assets()
{
    wp_enqueue_style('gt-style', get_stylesheet_uri(), [], time()); // Cache busting with time()
}
add_action('wp_enqueue_scripts', 'gt_enqueue_assets');

// Gutenberg and theme support
add_theme_support('align-wide');          // Wide/full alignments
add_theme_support('editor-styles');       // Enable editor styles
add_editor_style('style.css');            // Use front-end styles in editor
add_theme_support('wp-block-styles');     // Default block styles
add_theme_support('responsive-embeds');   // Responsive embeds
add_theme_support('title-tag');           // Dynamic titles

// Optional: Custom color palette
add_theme_support('editor-color-palette', [
    [
        'name' => 'Primary',
        'slug' => 'primary',
        'color' => '#0073aa',
    ],
    [
        'name' => 'Secondary',
        'slug' => 'secondary',
        'color' => '#222222',
    ],
    [
        'name' => 'Accent',
        'slug' => 'accent',
        'color' => '#f39c12',
    ],
]);
add_theme_support('custom-logo', [
    'height' => 60,
    'width' => 200,
    'flex-height' => true,
    'flex-width' => true,
]);
