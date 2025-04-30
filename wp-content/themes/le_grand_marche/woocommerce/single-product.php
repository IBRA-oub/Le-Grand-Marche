<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="custom-product-page">

    <?php
    if ( function_exists('woocommerce_breadcrumb') ) {
        woocommerce_breadcrumb();
    }
    ?>
    <div class="single-product-container">
        <div class="single-product-info">
            <p class="product-category">Légumes</p>
            <h1 class="product-title">Pommes de terre</h1>

            <div class="rating">
                <p>4.5</p>
                <div class="testimonial-rating">
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star">★</span>
                </div>
                <p>(23 Avis)</p>
            </div>

            <p class="product-desc-title">Descriptions</p>
            <p class="product-description">
                La pomme de terre, ou patate, est un tubercule comestible produit par l’espèce Solanum tuberosum,
                appartenant à la famille des solanacées
            </p>

            <div class="option-section">
                <div class="option-togle-container">
                    <p class="option-label">Épluche et coupe</p>
                    <div class="option-toggle">
                        <span>NO</span>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        <span>OUI</span>
                    </div>
                </div>

                <div class="option-buttons">
                    <button class="option-btn">
                        <img src="/le-grand-marche/wp-content/uploads/2025/04/Frame-1.png" alt="Épluche légumes image">
                        <span>Épluche-légumes</span>

                    </button>
                    <button class="option-btn">
                        <img src="/le-grand-marche/wp-content/uploads/2025/04/Frame-2.png" alt="Épluche légumes image">
                        <span>Épluche et coupe </span>
                    </button>
                    <button class="option-btn">
                        <img src="/le-grand-marche/wp-content/uploads/2025/04/Frame-3-2.png"
                            alt="Épluche légumes image">
                        <span>Épluche et coupe </span>
                    </button>
                </div>
            </div>

            <div class="price-section">
                <p class="price">12,00 MAD</p>
                <p class="extra">+ 4 Mad d’épluche</p>
                <div class="quantity">
                    <button>-</button>
                    <span>1kg</span>
                    <button>+</button>
                </div>
            </div>

            <div class="actions">
                <button class="add-to-cart">🛒 Ajouter au panier</button>
                <button class="fav-btn">❤️</button>
            </div>
        </div>

        <div class="single-product-img">
            <img src="/le-grand-marche/wp-content/uploads/2025/04/image-1.png" alt="sigle product image">
        </div>

    </div>
</div>

<?php
get_footer( 'shop' );