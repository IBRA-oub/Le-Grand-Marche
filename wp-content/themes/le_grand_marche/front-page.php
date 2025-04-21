<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package le_grand_marche
 */

get_header();
?>
<!-- =====hero section===== -->
<section class="hero-section">
    <div class="content-container">
        <div class="text-button-container">
            <div class="text-container">
                <p class="title-text">
                    Un mode de vie sain avec des <strong class="strong-text">Produits frais</strong> de le Grande Marche
                </p>
                <p class="description-text">
                    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire
                    pour
                    calibrer une mise en page, page est achevée. Généralement, on utilise un texte en faux latin...
                </p>
            </div>
            <div class="button-container">
                <button class="connection-button">Connectez-vous</button>

            </div>

        </div>
        <div class="image-container">

            <div class="bg-container"></div>
            <img src="/le-grand-marche/wp-content/uploads/2025/04/Mask-group.png" loading="lazy"
                alt="image of vegetables" class="image-hero-section">

        </div>


    </div>
</section>

<!-- ========best selling section====== -->
<section class="best-seller-section">
    <div class="text-buttons-conatiner">
        <div class="best-text-container">
            <p class="text">
                MEILLEURS VENTES
            </p>
        </div>

        <div class="more-buttons">
            <button class="left-row row-buttons" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 448 512">
                    <path fill="#507a32"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </button>
            <button class="right-row row-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#ffffff"
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
            </button>

        </div>


    </div>
    <div class="items-container">
        <div class="all-items" id="best-sellers-list">
            <?php echo do_shortcode('[best_selling_products columns=4 limit=4]'); ?>
        </div>
    </div>

</section>
<!-- =========service section========== -->
<section class="services-section">
    <div class="services-container">
        <div class="text-services-container">
            <div class="services-text">
                <p class="headline">
                    Un mode de vie sain avec des<br>
                    <span class="highlight">Produits frais</span> de <br>
                    le Grande Marche
                </p>


                <ul class="services-list">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="#4D7C0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="check-icon">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Meilleur service que les autres
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="#4D7C0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="check-icon">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Personnel expérimenté
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="#4D7C0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="check-icon">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Application Mobile
                    </li>
                </ul>
            </div>
        </div>
        <div class="image-container img-bag">
            <img src="/le-grand-marche/wp-content/uploads/2025/04/vue-dessus-assortiment-legumes-dans-sac-papier-1.png"
                loading="lazy" alt="Fresh vegetables in a paper bag">
        </div>
    </div>
</section>

<!-- ======== delivery section ========= -->
<section class="delivery-section">
    <div class="delivery-container">

        <div class="delivery-man-image-container">
            <div class="bg-delivery"> </div>
            <img src="/le-grand-marche/wp-content/uploads/2025/04/image-9-1.png" loading="lazy"
                alt="image of vegetables" class="image-dilevry-men">

        </div>
        <div class="delivery-text-container">
            <h2 class="delivery-heading">Livraison partout <br>au <span class="highlight">maroc</span></h2>
            <p class="delivery-description">
                Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour
                calibrer une mise en page, page est achevée. Généralement, on utilise un texte en faux latin...
            </p>
            <button class="signup-button">S'inscrire</button>
        </div>
    </div>

</section>

<!-- =========app download ========== -->
<section class="app-download-section">
    <div class="app-download-container">
        <div class="app-download-text">
            <p class="app-title">Télécharger maintenant l'application <span class="highlight-app">Le Grand
                    Marché</span>
                sur android et ios</p>
            <div class="app-store-buttons">
                <a href="#" class="app-store-button">
                    <img src="/le-grand-marche/wp-content/uploads/2025/04/Logo-Disponible-sir-App-store_full_image-ff837a2a-1-1.png"
                        alt="Disponible sur App Store" class="store-badge">
                </a>
                <a href="#" class="google-play-button">
                    <img src="/le-grand-marche/wp-content/uploads/2025/04/fr_badge_web_generic-1.png"
                        alt="Disponible sur Google Play" class="store-badge">
                </a>
            </div>
        </div>
        <div class="app-mockup-container">
            <img src="/le-grand-marche/wp-content/uploads/2025/04/Mask-group-1.png"
                alt="Application mobile Le Grand Marché" class="app-mockup-front">
        </div>
    </div>
</section>

<!--========== testimonial section========== -->
<section class="testimonials-section">
    <div class="title-container">
        <p class="testimonials-title-text">
            Ce que nos clients disent de <br>
            <strong class="testimonials-highlight">Notre entreprise</strong>
        </p>

    </div>
    <div class="testimonials-slider">
        <div class="wrapper">
            <button id="left" class="left-button row-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 448 512">
                    <path fill="#507a32"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </button>
            <ul class="carousel">
                <li class="card">
                    <div class="all-content-container">
                        <div class="testimonial-avatar-container">
                            <img src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png" alt="Client"
                                class="testimonial-avatar">
                        </div>
                        <h3 class="testimonial-name">Nom et prénom</h3>
                        <p class="testimonial-text">
                            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
                            provisoire pour calibrer une mise en page, page est achevée. Généralement, on utilise un
                            texte
                            en faux latin...
                        </p>
                        <div class="testimonial-rating">
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                </li>
                <li class="card">
                    <div class="all-content-container">
                        <div class="testimonial-avatar-container">
                            <img src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png" alt="Client"
                                class="testimonial-avatar">
                        </div>
                        <h3 class="testimonial-name">Nom et prénom</h3>
                        <p class="testimonial-text">
                            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
                            provisoire pour calibrer une mise en page, page est achevée. Généralement, on utilise un
                            texte
                            en faux latin...
                        </p>
                        <div class="testimonial-rating">
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                </li>
                <li class="card">
                    <div class="all-content-container">
                        <div class="testimonial-avatar-container">
                            <img src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png" alt="Client"
                                class="testimonial-avatar">
                        </div>
                        <h3 class="testimonial-name">Nom et prénom</h3>
                        <p class="testimonial-text">
                            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
                            provisoire pour calibrer une mise en page, page est achevée. Généralement, on utilise un
                            texte
                            en faux latin...
                        </p>
                        <div class="testimonial-rating">
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                </li>
                <li class="card">
                    <div class="all-content-container">
                        <div class="testimonial-avatar-container">
                            <img src="/le-grand-marche/wp-content/uploads/2025/04/Group-193.png" alt="Client"
                                class="testimonial-avatar">
                        </div>
                        <h3 class="testimonial-name">Nom et prénom</h3>
                        <p class="testimonial-text">
                            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
                            provisoire pour calibrer une mise en page, page est achevée. Généralement, on utilise un
                            texte
                            en faux latin...
                        </p>
                        <div class="testimonial-rating">
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                </li>

            </ul>
            <button id="right" class="right-button row-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#ffffff"
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
            </button>
        </div>


    </div>

</section>

<?php
get_template_part("template-parts/subscription-section");
get_footer();