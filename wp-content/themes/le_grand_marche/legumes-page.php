<?php
/**
 * The template for displaying fruts page
 *  Template Name: legumes
 */

get_header();
?>
<!-- =======hero section======== -->
<section class="first-section-container">
    <div class="text-img-container">
        <div class="desc-product-container">
            <p class="fruits-title">Les Légumes</p>
            <p class="fruits-description">Le lorem ipsum est, en imprimerie, une suite de mots sans signification
                utilisée à titre
                provisoire pour
                calibrer une mise en page, page est achevée. Généralement, on utilise un texte en faux latin...
            </p>
            <div class="search-container">
                <div class="serach-input-container">
                    <input type="text" class="input" placeholder="Recherche">
                    <button class="sub-button">Rechercher</button>
                </div>

            </div>

        </div>
        <div class=" img-container">
            <div class="bg-product-image"></div>
            <img src="/le-grand-marche/wp-content/uploads/2025/04/Group_199.png" loading="lazy"
                alt="image of vegetables" class="image-product-section">
        </div>
    </div>
</section>
<!-- =========all fruits products======= -->
<div class="items-container">
    <div class="all-items">

        <?php echo do_shortcode('[products paginate="true"  limit="21" columns="4" orderby="popularity" category="legumes"]'); ?>
    </div>
</div>
<?php
get_template_part("template-parts/subscription-section");
get_footer();
?>