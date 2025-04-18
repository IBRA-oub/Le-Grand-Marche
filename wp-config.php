<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'le_grand_marche' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%@}ul$BHsQ8dV;GH9I`ZI)dcmV^}W#A:OX|HKZO~Hq`OZB@mdA)nxw5~D+]poq=I' );
define( 'SECURE_AUTH_KEY',  'W0(W77^v>&[Rr$%!HkO4PTy/=xSS9fD&TJ$2r3I~:1!/qTC%8!)bG.!hn[hQ;jJO' );
define( 'LOGGED_IN_KEY',    'P@]Ek-7QbIm186@f-8MB6PzG|77cE6aWg|sp1]PK)tT]#)buSSVVpj|tt/omkx~)' );
define( 'NONCE_KEY',        'IVs-zgciJvEMy RIa+XPKZ|b]a+9q9ZQH53@P!C%C)o@qU*IqHgYVIb]zlX,.e21' );
define( 'AUTH_SALT',        'c2Cu`g653{)?gITlgj7cB[YPQz+~]M_Zw,Mc+PK8b*q+QP}WiU9hA/T;j~T^E8/z' );
define( 'SECURE_AUTH_SALT', '&k2JDf=w4hE^VVogVCsV$8MlGff5YGGkL~x7]/hG55>v4lOE~M~WEjRiWz%|s{z_' );
define( 'LOGGED_IN_SALT',   '{VHO`u(,hlvd4Ffo(GBf)=mc9_x|r,*Coog (<{_JE,e2bL-mlU2a*k@]Ut$ap:>' );
define( 'NONCE_SALT',       '3T?O@m=`-mUWG,cJaEFpb8yhZd$f~|3(l]QBw&%@:RWf.>LZwCFX%D^uM{jYQID3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'lgm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
