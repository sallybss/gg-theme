<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
        $logo_path = get_template_directory() . '/images/logo1_GG.png';
        if (file_exists($logo_path)): ?>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1_GG.png" alt="<?php bloginfo('name'); ?> Logo">
            </a>
        <?php else: ?>
            <p>Logo not found</p>
        <?php endif; ?>
    </div>

    <div class="nav-links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'items_wrap' => '<ul class="menu">%3$s</ul>',
            'fallback_cb' => function () {
                echo '<ul class="menu"><li><a href="#">Menu not assigned</a></li></ul>';
            },
        ));
        ?>
    </div>

    <div class="menu-icon" onclick="toggleSideMenu()">&#9776;</div>

    <div id="side-menu" class="side-menu">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleSideMenu()">&times;</a>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'items_wrap' => '<ul class="menu">%3$s</ul>',
            'fallback_cb' => function () {
                echo '<ul class="menu"><li><a href="#">Menu not assigned</a></li></ul>';
            },
        ));
        ?>
    </div>

    <?php if (function_exists('pll_the_languages')): ?>
        <div class="language-switcher">
            <ul>
                <?php
                pll_the_languages(array(
                    'show_flags' => 1,
                    'show_names' => 0
                ));
                ?>
            </ul>
        </div>
    <?php endif; ?>
    
</div>

<?php wp_footer(); ?>
<script>
    function toggleSideMenu() {
        const sideMenu = document.getElementById('side-menu');
        sideMenu.style.width = sideMenu.style.width === '250px' ? '0' : '250px';
    }
</script>
</body>
</html>