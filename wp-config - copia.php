<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wiki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'serverchkdsk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#Xem-gdv9#}E:rgQyC4+Oa9=}NVvT{z*0e9l>3f%YrZ<>^YcsjC#]*4kZ9d{l,Y|');
define('SECURE_AUTH_KEY',  '6hEot@Tx#-G]B)8,NX?%<lS5k6;F=xT=x]mdP+R|0C,Ts8MH(m<(8VFv,4tNPET5');
define('LOGGED_IN_KEY',    'AE?d>SRjbH:itM^M5r%i9eWD$y19Q]B4|0K0n}pt3Y~}UW$E-pvxE:JGGQyoVa<5');
define('NONCE_KEY',        'qf$N VJq*cp|%0FqUpq-Y 0(:Fz$-k=p@DRsnC2+QM1+Q~}-q|SPBW/W1a[IA*AU');
define('AUTH_SALT',        'eWL%DMc,+DAlMZ=+1xZDCs@+7{{N5j|P=STbm`P2Vi{hwk{9|,ix]{F%E68]5a_m');
define('SECURE_AUTH_SALT', ' {Saggo]0ebcZ U(hJ#fV_ mkUz#f4OyDC]6`z4Phgx>Q~.G8SzhnM7|BILp+fU8');
define('LOGGED_IN_SALT',   't?<,Ieib?_8+FMd,IeA[,q<5Q.Sz{}!||Pandf>bg]QD-.w[kZ!xQLE}:ldHOk2j');
define('NONCE_SALT',       '2{+Q=|G9s_eSp!sJ^o4gaTf@oLwfcxnP5@5G-XHz|2WIjd7Ev4l0s*yDzBD^Fp8U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
