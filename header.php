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
        <img src="images/logo_GG-01.png" alt="logo">
    </div>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => 'ul', // This will output the menu directly as a <ul> (no <div>)
        'menu_class' => '', // You can add a class if needed
        'fallback_cb' => false, // If no menu is set, don't display anything
        'depth' => 1, // If you have submenus, set this to the desired depth
    ));
    ?>
</div>

    <?php if (function_exists('pll_the_languages')): ?>
        <div class="language-switcher">
            <ul>
                <?php
                pll_the_languages(array(
                    'show_flags' => 0,
                    'show_names' => 0
                ));
                ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
