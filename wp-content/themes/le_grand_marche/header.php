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
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    wp_logout();
    wp_redirect(home_url());
    exit;
}

$current_user = wp_get_current_user();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'le_grand_marche'); ?></a>

    </div>
    <!--  ======web nav bar======-->
    <?php
    $template = get_page_template_slug();
    $header_class = (is_front_page() || $template === 'fruits-page.php' || $template === 'legumes-page.php') ? 'site-header' : 'active-header';
    ?>
    <header id="masthead" class="<?php echo $header_class; ?>">


        <?php
        $template = get_page_template_slug();
        if (is_front_page() || $template === 'fruits-page.php' || $template === 'legumes-page.php') {
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
                        <i class="fa-solid fa-heart fa-lg" style="color: <?php
                            $template = get_page_template_slug();
                            if (is_front_page() || $template === 'fruits-page.php' || $template === 'legumes-page.php' || $template === 'favoris-page.php') {
                                echo 'white';
                            } else {
                                echo '#86888982';
                            }
                            ?>;">
                        </i>

                    </a>
                </div>
                <div class="cart">
                    <a href="">
                        <i class="fa-solid fa-basket-shopping fa-lg" style="color: <?php
                            $template = get_page_template_slug();
                            if (is_front_page() || $template === 'fruits-page.php' || $template === 'legumes-page.php' || $template === 'favoris-page.php') {
                                echo 'white';
                            } else {
                                echo '#86888982';
                            }
                            ?>;"></i>
                    </a>
                </div>
                <div class="notification">
                    <a href="">
                        <i class="fa-solid fa-bell fa-lg" style="color: <?php
                            $template = get_page_template_slug();
                            if (is_front_page() || $template === 'fruits-page.php' || $template === 'legumes-page.php' || $template === 'favoris-page.php') {
                                echo 'white';
                            } else {
                                echo '#86888982';
                            }
                            ?>;"></i>
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
                                <h2><?php echo esc_html($current_user->display_name); ?></h2>
                                <p><?php echo esc_html($current_user->user_email); ?></p>
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
                            <a href="<?php echo esc_url( add_query_arg( 'action', 'logout' ) ); ?>"
                                class="option logout"><span>
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