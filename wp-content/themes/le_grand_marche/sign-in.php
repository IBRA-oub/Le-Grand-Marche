<?php
/**
 * The template for displaying sign-up page
 *  Template Name: sign-in
 */
get_header();
?>
<section class="container-all">
    <div class="form-connexion-container">
        <h2 class="auth-title">Connexion</h2>

        <form class="login-form">
            <label for="username">Name</label>
            <input class="input-connexion-form" type="text" id="username" placeholder="Enter user name" />

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input class="input-connexion-form" type="password" id="password" placeholder="Enter password" />
                <span class="toggle-password" id="eye-icon">
                    <img class="eye-icon" src="/le-grand-marche/wp-content/uploads/2025/04/eye.png" alt="eye icon">
                </span>
            </div>
            <a href="#" class="forgot-password">Forget password?</a>

            <button type="submit" class="btn primary">Connectez-vous</button>
            <button type="button" class="btn google">
                <span class="google-icon">G</span> Connectez-vous avec google
            </button>
        </form>

        <p class="signup-link">
            Vous n’avez pas de compte ?
            <a href="/le-grand-marche/sign-up">S'inscrire</a>
        </p>
    </div>
</section>

<?php
get_template_part("template-parts/subscription-section");
get_footer();
?>