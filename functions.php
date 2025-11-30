<?php 


// ENQUEUE MAIN STYLES AND SCRIPTS
function allow_head_content() {
    wp_enqueue_script('website-main-js', get_theme_file_uri('/script.js'), NULL, microtime(), true);
    wp_enqueue_style('website-main-css', get_stylesheet_uri(), NULL, microtime());

}

add_action('wp_enqueue_scripts', 'allow_head_content');



// ALLOWS PAGE TITLES TO BE DISPLAYED IN BROWSER TAB
function website_features() {
    register_nav_menu('header_menu_location', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'website_features');



// ALLOW SVG UPLOADS TO THE MEDIA LIBRARY
function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml'; 
    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_uploads');

?>