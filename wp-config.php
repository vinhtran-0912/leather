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
define( 'DB_NAME', 'leather' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ngoenoccho' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S1rI_V/~^~x{~=1ayd7uDL},w23oAE8g8*Gefe4Y4-VuWg;C%QZH}{#G3~*#y>9{' );
define( 'SECURE_AUTH_KEY',  'y}f.Xuf(+$xd4qN$s;we?Ob9;[QsIR6r&Q|jSCeL>B0mbJmcfTQtrGh_2}O=*Vjd' );
define( 'LOGGED_IN_KEY',    '3^z-5[@!B:8}4+2:AtQM(X*nL2iy!)$DD/|@[5<t8Fu%mX={IPc8p)FpNM>k4#sP' );
define( 'NONCE_KEY',        'rlrIl$Xu0]D]~Ev@V8bBOj#MkNjOb|QRAqq{_1Y)1t7h-=_)H_>YzuI<]#l;7oj[' );
define( 'AUTH_SALT',        'C?*<+P`;orq^!(!:e{=x|KkCe8v<_Qos>Y(;=z6JnHqKz_Pu$8%@d`(51<ox*w;j' );
define( 'SECURE_AUTH_SALT', 'B^CLfZ!BIwGlj6`Urv$`pj5::/V$>]S5wLg_@-+c|dp#L?r}WXb!ktEqb,i)2o@A' );
define( 'LOGGED_IN_SALT',   'G8~(K6>@U%20nm|HVYL/VouS)3,rboQU1Hcd`;~}Ya><R}@m:#teFn$R!2s#E!t2' );
define( 'NONCE_SALT',       '-8-` OeA5VT^}U!q8} HvmPHW#n3ue61Al1fSmoV0}qr8{GM>sE_tHg+##oX*vU+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

/** disable connect FTP. */
define('FS_METHOD','direct');

