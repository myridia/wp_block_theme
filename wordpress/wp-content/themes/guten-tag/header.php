<header class="site-header">
    <div class="header-container">
        <div class="logo">
            <?php 
            if ( function_exists('the_custom_logo') && has_custom_logo() ) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <?php } ?>
        </div>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
            ));
            ?>
        </nav>

        <?php
        $cta_text = get_theme_mod('gt_cta_text', 'Get Started');
        $cta_url  = get_theme_mod('gt_cta_url', '#');
        ?>
        <div class="header-cta">
            <a href="<?php echo esc_url($cta_url); ?>" class="cta-button"><?php echo esc_html($cta_text); ?></a>
        </div>
    </div>
</header>
