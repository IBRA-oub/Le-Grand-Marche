<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le_grand_marche
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'le_grand_marche'); ?></a>

    </div>
    <!--  ======web nav bar======-->
    <header id="masthead" class="<?php echo (is_front_page()) ? 'site-header' : 'active-header'; ?>">

        <?php
        if (is_front_page()) {
            the_custom_logo();
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '">
            <img class="black-logo" src="/le-grand-marche/wp-content/uploads/2025/04/Frame.png" alt="Logo">
          </a>';
        }
        ?>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
            <?php
            $template = get_page_template_slug();
            if ($template !== 'sign-up.php' && $template !== 'sign-in.php'):
                ?>
            <div class="auth-buttons-container">
                <a href="<?php echo esc_url(home_url('/sign-in')); ?>" class="buttons sign-in-button">Connexion</a>
                <a href="<?php echo esc_url(home_url('/sign-up')); ?>" class="buttons sign-up-button">S'inscrire</a>

            </div>
            <?php endif; ?>


        </nav>
        <div class="burger-menu">

            <svg class="icon-burger" xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512">
                <path fill="#ffffff"
                    d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg>


            <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 384 512">
                <path fill="#ffffff"
                    d="M231 256l107-107c12-12 12-31 0-43s-31-12-43 0L188 213 81 106c-12-12-31-12-43 0s-12 31 0 43l107 107-107 107c-12 12-12 31 0 43s31 12 43 0l107-107 107 107c12 12 31 12 43 0s12-31 0-43L231 256z" />
            </svg>
        </div>

    </header>