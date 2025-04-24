<?php
/**
 * The template for displaying sign-up page
 *  Template Name: sign-up
 */

get_header();
?>
<section class="container-all">
    <div class="form-connexion-container">
        <h2 class="auth-title">S'inscrire</h2>

        <form class="login-form">
            <label for="username">Name</label>
            <input class="input-connexion-form" type="text" id="username" placeholder="Enter user name" />

            <label for="email">Email</label>
            <input class="input-connexion-form" type="email" id="email" placeholder="Enter email" />

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input class="input-connexion-form" type="password" id="password" placeholder="Enter password" />
                <span class="toggle-password" id="eye-icon">
                    <img class="eye-icon" src="/le-grand-marche/wp-content/uploads/2025/04/eye.png" alt="eye icon">
                </span>
            </div>

            <label for="confirm-password">confirm password</label>
            <div class="password-wrapper">
                <input class="input-connexion-form" type="password" id="confirm-password"
                    placeholder="Confirm your password" />
                <span class="toggle-password" id="confirm-eye-icon">
                    <img class="eye-icon" src="/le-grand-marche/wp-content/uploads/2025/04/eye.png" alt="eye icon">
                </span>
            </div>

            <button type="submit" class="btn primary">Connectez-vous</button>
        </form>

        <p class="signup-link">
            Already have an account ?
            <a href="/le-grand-marche/sign-in">Sign In</a>
        </p>
    </div>
</section>

<?php
get_template_part("template-parts/subscription-section");
get_footer();
?>