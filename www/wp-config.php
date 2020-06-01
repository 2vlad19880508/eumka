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
define( 'DB_NAME', 'industry_umka' );

/** MySQL database username */
define( 'DB_USER', 'industry_umka' );

/** MySQL database password */
define( 'DB_PASSWORD', '1gk!^T90Ac' );

/** MySQL hostname */
define( 'DB_HOST', 'industry.mysql.tools' );

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
define( 'AUTH_KEY',         '>]kSH@85V[)%yF(w@*s|[_>Gx{_?n1~g2}@vx#}FwQ)v_t8:# 2X1%NnD`,.D8F8' );
define( 'SECURE_AUTH_KEY',  'H{bTtJ3oR81hm`8{heDQyh614^2X:NK_VLaCXlVJ6{vDjw<GM3mXnH(LRn0QreXJ' );
define( 'LOGGED_IN_KEY',    'f-g;=VxnEUxkR_qh?}f;etMbYe@X<}=?^%VD:sFV2g:nTrO+nRL;g%/d@MB_vU}h' );
define( 'NONCE_KEY',        'nW;Wm[Y1)a-2reLY+zx1{K*B*_$8xC_p_w`+=l}hr54iGc,mT|u-f8D*_T4Cm+T+' );
define( 'AUTH_SALT',        'kKq98w5JMCo]!FR[i=C4WcWjd}CL5BG~F,RqA+s{Ph.K)+{H*=j:J%1QvFq_>23~' );
define( 'SECURE_AUTH_SALT', ']?.M/8x(:v9x./0#JL,:u{FXC{,f}fKO9MI@r4qNL~RxXXy M:]Y{<#aT=u|W#ep' );
define( 'LOGGED_IN_SALT',   'fLWr`gd28c*p1sc#O$(l0X=#L#t5`oH0`yW1>/p^b:@8as<^,G#Q<Z&}Wfz~EqZ*' );
define( 'NONCE_SALT',       '@-VFB6od>/4GmaK7Q+,[dQ3`3`j~HRlTFwlkQHr<)0C+7oyd?rkYuK#nRqX)!qe,' );

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
