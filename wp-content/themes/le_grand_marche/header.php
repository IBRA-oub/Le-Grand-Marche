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

            $on_auth_pages = $template === 'sign-in.php' || $template === 'sign-up.php';
            $logged_in = is_user_logged_in();

            if (!$logged_in && !$on_auth_pages): ?>
            <div class="auth-buttons-container">
                <a href="<?php echo esc_url(home_url('/sign-in')); ?>" class="buttons sign-in-button">Connexion</a>
                <a href="<?php echo esc_url(home_url('/sign-up')); ?>" class="buttons sign-up-button">S'inscrire</a>
            </div>

            <?php
            elseif ($logged_in && !$on_auth_pages): ?>
            <div class="user-buttons-container">
                <div class="favoris">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                        </svg>
                    </a>
                </div>
                <div class="cart">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 576 512">
                            <path fill="#ffffff"
                                d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                        </svg>

                    </a>
                </div>
                <div class="notification">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512">
                            <path fill="#ffffff"
                                d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                        </svg>
                    </a>
                </div>
                <div class="profile-container">
                    <div class="profile-icon" id="profileIcon">
                        <img src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png" alt="profile icon">
                    </div>

                    <div class="profile-popup" id="profilePopup">
                        <div class="popup-header">
                            <div class="avatar-wrapper">
                                <img class="avatar" src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png"
                                    alt="Avatar">
                                <div class="camera-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12"
                                        viewBox="0 0 512 512">
                                        <path fill="#ffffff"
                                            d="M149.1 64.8L138.7 96 64 96C28.7 96 0 124.7 0 160L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64l-74.7 0L362.9 64.8C356.4 45.2 338.1 32 317.4 32L194.6 32c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="user-info">
                                <h2>Nom et prénom</h2>
                                <p>nomprenom@gmail.com</p>
                            </div>
                        </div>
                        <div class="popup-options">
                            <a href="/le-grand-marche/my-account/" class="option active"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25"
                                        viewBox="0 0 448 512">
                                        <path fill="#507A32"
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                                    </svg>
                                </span>
                                Informations
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                        viewBox="0 0 512 512">
                                        <path fill="#507A32"
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </span></a>
                            <a href="#" class="option"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                        viewBox="0 0 512 512">
                                        <path fill="#dedede"
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                    </svg>
                                </span> Help</a>
                            <a href="#" class="option logout"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                        viewBox="0 0 512 512">
                                        <path fill="#dedede"
                                            d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                    </svg>
                                </span> Déconnexion</a>
                        </div>
                    </div>
                </div>


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