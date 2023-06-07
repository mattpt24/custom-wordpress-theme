<?php 


// IMPORTING CSS, CDN's & JS /////////////////////////////////////////////////////////////////////////


function allow_head_content() {

    // JAVASCRIPT PARAMETERS , PATH, ANY DEPENDENCIES?, VERSION NUMBER, LOAD AT THE BOTTOM OF PAGE, MICROTIME PREVENTS CACHING
    wp_enqueue_script('website-main-js', get_theme_file_uri('/script.js'), NULL, microtime(), true);
    wp_enqueue_script('scroll-animations', '//unpkg.com/aos@2.3.1/dist/aos.js', NULL, microtime(), true);



    // IMPORTING CSS STYLESHEET AND OTHER CDN's - FIRST PARAMETER CAN BE ANYTHING
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('website-main-css', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('scroll-animations-css', '//unpkg.com/aos@2.3.1/dist/aos.css', NULL, microtime());

}

// RUNS FUNCTION TO ENABLE ALL OF THE ABOVE
add_action('wp_enqueue_scripts', 'allow_head_content');




/////////////////////////////////////////////////////////////////////////////////////////////////




// ALLOWS PAGE TITLES TO BE DISPLAYED IN BROWSER TAB

function website_features() {
    register_nav_menu('header_menu_location', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'website_features');






/////////////////////////////////////////////////////////////////////////////////////////////////




// HERO SECTION

function custom_theme_hero($wp_customize) {

    // CREATE NEW SECTION IN ADMIN CUSTOMISE PAGE
    $wp_customize->add_section('custom-theme-hero-section', array(
        'title' => 'Hero Section'
    ));
    
    
    
    // HERO TITLE  
    $wp_customize->add_setting('custom-theme-hero-title', array(
        'default' => 'You can change me in Customise!',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-theme-hero-title-control', array(
        'label' => 'Hero Title',
        'section' => 'custom-theme-hero-section',
        'settings' => 'custom-theme-hero-title'
    )));
    
    
    
    
    // HERO SUBTITLE 
    $wp_customize->add_setting('custom-theme-hero-subtitle', array(
        'default' => 'This is the subtitle you can also change me!',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-theme-hero-subtitle-control', array(
        'label' => 'Hero Subtitle',
        'section' => 'custom-theme-hero-section',
        'settings' => 'custom-theme-hero-subtitle',
        'type' => 'textarea'
    )));
    




    // HERO BUTTON 1 TEXT & LINK
    $wp_customize->add_setting('hero-button-1-text', array(
        'default' => 'Button 1 Text',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-button-1-text-control', array(
        'label' => 'Button 1 Text',
        'section' => 'custom-theme-hero-section',
        'settings' => 'hero-button-1-text',
        'type' => 'text'
    )));
    $wp_customize->add_setting('hero-button-1-link', array(
        'default' => 'Button 1 Link',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-button-1-link-control', array(
        'label' => 'Button 1 Link',
        'section' => 'custom-theme-hero-section',
        'settings' => 'hero-button-1-link',
        'type' => 'text'
    )));

    

    // HERO BUTTON 2 TEXT & LINK
    $wp_customize->add_setting('hero-button-2-text', array(
        'default' => 'Button 2 Text',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-button-2-text-control', array(
        'label' => 'Button 2 Text',
        'section' => 'custom-theme-hero-section',
        'settings' => 'hero-button-2-text',
        'type' => 'text'
    )));
    $wp_customize->add_setting('hero-button-2-link', array(
        'default' => 'Button 2 Link',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-button-2-link-control', array(
        'label' => 'Button 2 Link',
        'section' => 'custom-theme-hero-section',
        'settings' => 'hero-button-2-link',
        'type' => 'text'
    )));


    
    // HERO BG IMAGE 
    $wp_customize->add_setting('custom-theme-hero-image');
    
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom-theme-hero-image-control', array(
        'label' => 'Hero Image',
        'section' => 'custom-theme-hero-section',
        'settings' => 'custom-theme-hero-image',
        'height' => '1080',
        'width' => '1920'
    )));
    
    
    
    
    }
    
    
    // RUNS THE ABOVE FUNCTION
    add_action('customize_register', 'custom_theme_hero');




    

/////////////////////////////////////////////////////////////////////////////////////////////////////////////





// CTA SECTION 

function custom_theme_cta($wp_customize) {

    // CREATE NEW SECTION IN ADMIN CUSTOMISE PAGE
    $wp_customize->add_section('custom-theme-cta-section', array(
        'title' => 'CTA'
    ));
    
    
    
    // CTA TITLE CUSTOMISABLE CODE
    $wp_customize->add_setting('custom-theme-cta-title', array(
        'default' => 'You can change me in Customise!',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-theme-cta-title-control', array(
        'label' => 'CTA Title',
        'section' => 'custom-theme-cta-section',
        'settings' => 'custom-theme-cta-title'
    )));
    
    
    
    
    // CTA SUBTITLE CUSTOMISABLE CODE
    $wp_customize->add_setting('custom-theme-cta-subtitle', array(
        'default' => 'This is the subtitle you can also change me!',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-theme-cta-subtitle-control', array(
        'label' => 'CTA Subtitle',
        'section' => 'custom-theme-cta-section',
        'settings' => 'custom-theme-cta-subtitle',
        'type' => 'textarea'
    )));
    
    
    
    // CTA LINK CUSTOMISABLE CODE
    $wp_customize->add_setting('custom-theme-cta-link');
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-theme-cta-link-control', array(
        'label' => 'CTA Link',
        'section' => 'custom-theme-cta-section',
        'settings' => 'custom-theme-cta-link',
        'type' => 'dropdown-pages'
    )));
    
    
    
    
    // CTA BG IMAGE CUSTOMISABLE CODE
    $wp_customize->add_setting('custom-theme-cta-image');
    
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'custom-theme-cta-image-control', array(
        'label' => 'CTA Image',
        'section' => 'custom-theme-cta-section',
        'settings' => 'custom-theme-cta-image',
        'height' => '229',
        'width' => '2560'
    )));

    
    }
    
    
    // RUNS THE ABOVE FUNCTION
    add_action('customize_register', 'custom_theme_cta');
?>