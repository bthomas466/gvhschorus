<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gvhschorus');

/** MySQL database username */
define('DB_USER', 'gvhschorus');

/** MySQL database password */
define('DB_PASSWORD', 'gvhschorus');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mbB)f_<[/ddldGW_HkEWy2k{Fy,my_JdGh#K8*SEXcQe+.zh-lGj[,EBMV|P0t,#');
define('SECURE_AUTH_KEY',  ':vuBmipT,^Yi`k#$Bmq520#NF.wdI}Gc9HDh({9zQx??^%`P4o&H (n,ulHs]e4w');
define('LOGGED_IN_KEY',    '{B %;@=R}W]+2R[}-uZ=zC36FK+awm9J^EL7QSAkd+HmB88,}]!TB=D!-Ts4,6aa');
define('NONCE_KEY',        'a%=C1&]DO+%).H8c,y]^*@?,@-2RdnRWAQh%{W@:7KVH(lJP$DY#)Q`TK-G1NYp>');
define('AUTH_SALT',        'I.>G+CWG@Px+p4mVtXbde2K%&%$C+%%dm4$)i-#f@U95A&HYY$V=:nUud:VeQmax');
define('SECURE_AUTH_SALT', 'dDz&vKL&|?6u{X=yxA1i<=U4EJ/YIcy|@SHz-SQrI=o>,^=M1?=|HhlQpP.|Rhr6');
define('LOGGED_IN_SALT',   '4RMCbnRJ.F2qzY#;BTL+_4A.+]4FXQhoa8.V}-n#Zhs>ZHE=pq&bE/t3> +B:|(]');
define('NONCE_SALT',       'Vr,Gv69oP9%X3D6P~_l14fQmI;:5?/bsPb~)9XkSgZ8w:##`!Cc3?r[$gQ00l*k#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
