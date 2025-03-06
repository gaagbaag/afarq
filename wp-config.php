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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/XAMPP/xamppfiles/htdocs/afarq/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'afarq2025' );

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
define( 'AUTH_KEY',         'rJAH_*;7[1iKg5`NthSX*XOw_E60mMUYErVK1;)`;E16k;Q4HD@8/yt0Wc*+VbzN' );
define( 'SECURE_AUTH_KEY',  'wSpAHKjC|=U6XZqjkvHWY&<(H9XubJ@%FjRQ {5BDWN^X=^6%m;}+SC~)X<`hg)H' );
define( 'LOGGED_IN_KEY',    '^z$^.(FRWcP1$fkSuRZ]Tu^JM!37L~=wUD/>r&cK#b[+i;1vwwS:.yr~<7+NZ&V9' );
define( 'NONCE_KEY',        'QmH-zI*?nbyOx /MvJe%iWSL|6;`TkEZ_;,8E[btKbL3$Fdk #1]N&MReZSm:C D' );
define( 'AUTH_SALT',        'yUX11(jG-VwyN!n#(u?Ag[tR,N4A/I(|b5*@4)?aH|Sf.UT#JsWd{Hvn4xL3ok/(' );
define( 'SECURE_AUTH_SALT', '}C!UB<2 {g(_{-%=_%SRD1Q:@`3Jg]HY,P%}l}Smh+D*2v_NW!cf1fU9TAp[GnT ' );
define( 'LOGGED_IN_SALT',   'Q9*^S`z8q**Pfki/#lKQ^VxK*h6!xCbAPYhKczg|[[|O>Akf,QZF9qAqn~3G+2@X' );
define( 'NONCE_SALT',       '+<pR1V{.S*]!@Ys%mgm5^zoqf*nQHIfd?B$74zR%qwA%&mC<UDHN^U=]MKfs_eVS' );

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
$table_prefix = 'wp_';

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
