<section style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('custom-theme-hero-image'));?>)" id="hero">
    <div class="hero__content">

        <!-- TITLE & SUBTITLE -->
        <h1 class="hero__title"><?php echo get_theme_mod('custom-theme-hero-title')?></h1>
        <h3 class="hero__subtitle"><?php echo get_theme_mod('custom-theme-hero-subtitle')?></h3>


        <!-- BUTTONS -->
        <div class="hero__btn-container">
        <a href="<?php echo get_theme_mod('hero-button-1-link')?>" class="btn btn--dark"><?php echo get_theme_mod('hero-button-1-text')?></a>
        <a href="<?php echo get_theme_mod('hero-button-2-link')?>" class="btn btn--light"><?php echo get_theme_mod('hero-button-2-text')?></a>
        </div>
        
    </div>
</section>