<?php
// Sécurité
if (!defined('ABSPATH')) {
    exit;
}

// register function
function handle_user_register()
{
    global $register_errors;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {
        $register_errors = [];

        $username = sanitize_text_field($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            $register_errors[] = 'Veuillez remplir tous les champs.';
            return;
        }

        if (!is_email($email)) {
            $register_errors[] = 'L\'adresse email est invalide.';
        }

        if ($password !== $confirm_password) {
            $register_errors[] = 'Les mots de passe ne correspondent pas.';
        }

        if (username_exists($username)) {
            $register_errors[] = 'Ce nom d\'utilisateur existe déjà.';
        }

        if (email_exists($email)) {
            $register_errors[] = 'Cet email est déjà utilisé.';
        }

        if (empty($register_errors)) {
            $user_id = wp_create_user($username, $password, $email);

            if (!is_wp_error($user_id)) {
                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id);
                wp_redirect(home_url());
                exit;
            } else {
                $register_errors[] = 'Une erreur est survenue lors de la création du compte.';
            }
        }
    }
}

// login function
function handle_user_login()
{
    global $login_errors;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
        $login_errors = [];

        $username = sanitize_text_field($_POST['username']);
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $login_errors[] = 'Veuillez remplir tous les champs.';
            return;
        }

        $creds = array(
            'user_login' => $username,
            'user_password' => $password,
            'remember' => true
        );

        $user = wp_signon($creds, false);

        if (is_wp_error($user)) {
            $login_errors[] = 'Identifiants invalides.';
        } else {
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID);
            wp_redirect(home_url());
            exit;
        }
    }
}