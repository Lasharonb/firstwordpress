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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c9' );

/** MySQL database username */
define( 'DB_USER', 'lbillups' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lezxbW|^U.1n-R=4~)1/WL$KPhV[jaio }xE!K4saG5?kSaej,BwU@o@@58</$*3');
define('SECURE_AUTH_KEY',  '-@o-7f4svRmVWK:$o|Zgt<&1bwmEql8m<s#3760 ^,%taVyqLQg{G@sO1>hM%h-;');
define('LOGGED_IN_KEY',    'gELzv)4hVHYx_t2q{?5]j9N,.3[xK?y,Kp|?E9-e:suq*R]}F|fq<YxQLl{`i%`)');
define('NONCE_KEY',        '8iX%?$C)wotzM6W<QhUC|+e~J:RG&s9-Jg[@x3 Dpq8H&L2.~6{CoO^(tpe7MgNq');
define('AUTH_SALT',        'rhxhI8`TC}YK.Y*>~ka~W?=lxLld/n9<o{(}qEp1~1,.SY<|t96r?9L[%E%K~?ZQ');
define('SECURE_AUTH_SALT', '4@l+k*)l5j}d)CNMhQPqZ=z(lNQgyZ[Cf`p b!Vz+p8wxPQn?%)n2~CYkO>3Z80I');
define('LOGGED_IN_SALT',   'G5/0DkR5oHGM?``|<*|.:3 c`C!xg0$&:JZk[f$1TZ-l q_u_N`G7,!b~.O!NU`J');
define('NONCE_SALT',       '*(t89Qr~h-3>WB2B?b|0w]^wjsOC5&:xdiU#a$*)cm.69.L[+/}>3Ed~e-]2TUo=');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
