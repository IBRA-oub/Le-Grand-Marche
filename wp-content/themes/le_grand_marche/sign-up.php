<?php
/**
 * The template for displaying sign-up page
 *  Template Name: sign-up
 */

 if ( is_user_logged_in() ) {
    wp_redirect(home_url());
    exit;
}

handle_user_register(); 

get_header();
global $register_errors;
?>
<section class="container-all">
    <div class="form-connexion-container">
        <h2 class="auth-title">S'inscrire</h2>

        <?php if (!empty($register_errors)): ?>
        <div class="form-errors">
            <?php foreach ($register_errors as $error): ?>
            <p class="error-message"><?php echo esc_html($error); ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form class="login-form" method="POST">
            <label for="username">Name</label>
            <input class="input-connexion-form" name="username" type="text" id="username"
                placeholder="Enter user name" />

            <label for="email">Email</label>
            <input class="input-connexion-form" name="email" type="email" id="email" placeholder="Enter email" />

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input class="input-connexion-form" name="password" type="password" id="password"
                    placeholder="Enter password" />
                <span class="toggle-password" id="eye-icon">
                    <img class="eye-icon" src="/le-grand-marche/wp-content/uploads/2025/04/eye.png" alt="eye icon">
                </span>
            </div>

            <label for="confirm-password">confirm password</label>
            <div class="password-wrapper">
                <input class="input-connexion-form" type="password" id="confirm-password" name="confirm_password"
                    placeholder="Confirm your password" />
                <span class="toggle-password" id="confirm-eye-icon">
                    <img class="eye-icon" src="/le-grand-marche/wp-content/uploads/2025/04/eye.png" alt="eye icon">
                </span>
            </div>

            <button type="submit" name="register_submit" class="btn primary">Connectez-vous</button>
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