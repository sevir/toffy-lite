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
define('DB_NAME', 'toffy-lite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/X%ol;0rdpX3C,N!TeU6s#0;p*3K>4hxY+e5;{G]f/=eheLPv_o0-qwXG+UUW~ua');
define('SECURE_AUTH_KEY',  '@?+NyLbOGdd0tn8zD~Z|9,=p/8#iR_a-<]kb)baeq#,KK`C|`)z:{V*v5+<,-|CD');
define('LOGGED_IN_KEY',    'G&WrYD@(c:z{TY+x-[]02^C1|D CFV#(B=Qn|FYFjfG7OM2lNu%C]r<XpL7}nEkW');
define('NONCE_KEY',        'Qa2`EF Ui9I#!ieVFv0J+$%)Ga,T3qhhAxH*-q-rKb}vJ9W8$C${Z=qzgSh<P2g]');
define('AUTH_SALT',        'Mpy?_UR3z>H1,NEY|u<0zi-9{]8:<@;jH=DLg1HZW3=1{FIH> CBIgzMTaEF!o8W');
define('SECURE_AUTH_SALT', 'Fj300]^-:bkjmAr7-q<(qEUiV|S5aa<3ExbD@J%-#);Kg$LFaK;$Z{4SrOI8~fcH');
define('LOGGED_IN_SALT',   'pDd&Wfw5a*0l>$l[h<dD*?o0yOLrrfK)tTP)V-iulf|uR|zc!#jLGAG`>QV[TGIw');
define('NONCE_SALT',       'dy>BqHS@!MIeA$X|bR &|sq#&Igg-N&y5l|P5~FYv<|>.q.n5F[g-]J2=|-R+[2M');

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
