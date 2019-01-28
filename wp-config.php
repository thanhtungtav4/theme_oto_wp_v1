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
define('DB_NAME', 'demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'u9:PYf$`!fV[n;*OMjJIrc#tKaAqwCFTk<.=t!&7__.$|hBF/1Ap|w5_:QPtW?ck');
define('SECURE_AUTH_KEY',  '0sPf/Xp</5G%;Mxk,b*%.:+O`XvV(olzm.FgP[dvz=CJltn#o2vla-50%A/CSKW$');
define('LOGGED_IN_KEY',    'd=fg$GbZp&otZcuL65}G&r{iF`T7;S~e:ad>1-*Fp!lf+p=2@#[+jn @(rA6]/us');
define('NONCE_KEY',        'cpWPA38u:id|)opm$j0-K*n{oHrjGTc4ujAz@/cZ!=JmvXq,ULZ/%Ag*G:P3F5x2');
define('AUTH_SALT',        'B5(X$~[4n[>6v!-$iEe.J^H=uc[)cU|`t5JR>E($s(`<:]=4yr{X5rmW;RE-/z3m');
define('SECURE_AUTH_SALT', 'NJ*yUV1=v{3J*uKXmVEE3s0Dj/R^bXlb[5L*%T%h t.W[VZ.F=EybKr>=KLq(e*[');
define('LOGGED_IN_SALT',   'Vhv<pu2oiN&h|NXM0zSUGN:m]X|irehfxe&91ts<~F]e )YkeIb|!cSDRo>ku7g4');
define('NONCE_SALT',       '+=5j,IOIEA~3<gYeSZW}ii(cYCojnNh-D$Fm/=(..Zhpfd/e_3(ZR`Jkl]?v9z[1');

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
