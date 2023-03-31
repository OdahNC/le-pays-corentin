<?php
// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_style('css', '')
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css');
    wp_enqueue_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js', [], false, true);
}

// J'inscris ici avec ce bloc quelles parties de wordpress mon thème va supporter pour pouvoir les utiliser
function lepays_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', "En tête du menu");
    register_nav_menu('footer', 'Pied de page');
}

function lepays_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function lepays_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
add_action('after_setup_theme', 'lepays_supports');
add_filter('nav_menu_css_class', 'lepays_menu_class');
add_filter('nav_menu_link_attributes', 'lepays_menu_link_class');
?>