<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package le_grand_marche
 */

?>

<footer id="colophon" class="site-footer">
    <section class="footer-container-content">
        <div class="footer-logo-text-container">
            <div class="logo-container">
                <?php the_custom_logo();?>
            </div>
            <div class="footer-text-container">
                <div class="desc-hour-container">
                    <div class="footer-description-text">

                        <p>Très bonne nourriture Frais, rapide, amical, abordable Très flexible avec les commandes.
                            bonnes portions si vous le souhaitez</p>
                    </div>
                    <div class="hours-open">
                        <strong>Heures d'ouverture</strong>

                        <p>Lun-Sam (8;00-6:00) <br>
                            Dimanche-Fermé </p>
                    </div>

                </div>
                <div class="info-add-container">
                    <div class="footer-description-text">

                        <p> <strong>Adress :<br> </strong>
                            932 Mhamid Rue Nakhil,<br> Marrakech</p>
                    </div>
                    <div class="hours-open">
                        <p><strong>E-mail:</strong> Hello@legrandmarche.com</p>
                        <p><strong>Fix:</strong> +212 524 ++++ +++</p>
                    </div>
                </div>
                <div class="tabs-container">
                    <p>Accueil</p>
                    <p>A propos </p>
                    <p>Actualités</p>
                    <p>boutique</p>
                    <p>Faq</p>
                    <p>Contact</p>
                </div>

            </div>

        </div>
        <div class="footer-image-container">
            <img src="/le-grand-marche/wp-content/uploads/2025/04/pestc-1.png" loading="lazy" alt="image of vegetables">
        </div>

    </section>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>