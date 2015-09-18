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
define('DB_NAME', 'toffylite');

/** MySQL database username */
define('DB_USER', 'toffylite');

/** MySQL database password */
define('DB_PASSWORD', 'toffylite');

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
define('AUTH_KEY',         '*+[-+SiHtD5]-1Y]^EH*+:~@{?e9niC&ZSfyE,@ns]XNLx@q`X},$83]>2MOa~9X');
define('SECURE_AUTH_KEY',  '4uu6?s!eB|}.TEN+.ITd>4E@Y:wFVtbZK@gRwJ#vD.6U39BRMT-fQFejJmkW)Psc');
define('LOGGED_IN_KEY',    'BFZsf|i=|$2G~y1H[bJ3d6~91ST.WGUbI8T/TvV|t+|N[&1-7fmr4+k-E!zz;6)g');
define('NONCE_KEY',        'M8p-XN=%eZ)_E4v:I^}3~nK$fsD!TU}R?F.?0=>13#U{_qG94+ZYB]$HD59`{=l)');
define('AUTH_SALT',        '@NgNnxGG-:MyGKpVk3EM<.ycC>m+}d{PmQ7,4|kaF4#w6u9& +eR8/P$U]hS>N|,');
define('SECURE_AUTH_SALT', '-SkufP&Ca.eAb X3}H{|Zzi.N/_K*bL4ZkR^uv*Xp+.cLoH_r/x/hnw_DgSbZinW');
define('LOGGED_IN_SALT',   '4~&^ka;B[>.X{Dz*Qqn.?Xp_?ms|XMI;$B}~[jB: ,$u}gi1  23 ;?%:*U P30o');
define('NONCE_SALT',       'ZRla|46gdF-y`|aiyMkOc Cg*>=(.,JSy@#=Z@^J6+GFs0s}(VQ67aqTNkedqv y');

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
