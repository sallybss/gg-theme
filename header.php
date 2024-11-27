<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
   
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="nav">
    <div class="logo">
        <?php
        // Display the logo if the file exists
        $logo_path = get_template_directory() . '/images/logo1_GG.png';
        if (file_exists($logo_path)): ?>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1_GG.png" alt="<?php bloginfo('name'); ?> Logo">
            </a>
        <?php else: ?>
            <p>Logo not found</p>
        <?php endif; ?>
    </div>

    <!-- WordPress Navigation Menu -->
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container' => false, // No container around <ul>
        'items_wrap' => '<ul class="menu">%3$s</ul>',
        'fallback_cb' => function () {
            echo '<ul class="menu"><li><a href="#">Menu not assigned</a></li></ul>';
        },
    ));
    ?>

    <!-- Language Switcher -->
    <?php if (function_exists('pll_the_languages')): ?>
    <div class="language-switcher">
        <?php
        echo pll_the_languages(array(
            'show_flags' => 1,
            'show_names' => 0,
            'hide_if_empty' => false, // Ensures it always displays
        ));
        ?>
    </div>
<?php endif; ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
