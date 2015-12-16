<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'solstice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^PW@Fs}U< ^{L3VM 5n{9P4H}^E,+EvLh+PxM1Z`QPToXnm2}A~]E5T#pW&XI.K;');
define('SECURE_AUTH_KEY',  ',r~QT16R~?R-()jf1G|c,KoLAZ{aHGi5N4g%GxTM~@lZbTaEemW:b3=]3E.8g4#o');
define('LOGGED_IN_KEY',    'Hy8&(jyu=tLe^FOb2tQx^+/TcW&/yq5VZC&cA7X68z0}DTUVGvdT(4:l+US+[ac&');
define('NONCE_KEY',        '6##Wmcv^~N@rbksx^l42i~|x#|Ge)$xcZg7n}dJ30WB~9)n[6h`_$e,D*K)c?>Ks');
define('AUTH_SALT',        'Sc2>%0L}V/`{vumK2XVio?TM|@*cqB:6ap]<R.X([!!aU+2*N:A4OXj-*,b*5d<*');
define('SECURE_AUTH_SALT', 'fUiopZ$q6+sU<Hu/+-1BD~Sh,%ImSmvPGvdlg/}!%g}U-Nl6qio/oOqOB@*xWke4');
define('LOGGED_IN_SALT',   '<KSB#RI@QKMeAT?u01&Hp-uvPx9]q:KF1FVwG{0@|GGfm4q!f0AOu-2?;SNCDUyk');
define('NONCE_SALT',       '&Y*a1qqi)wS+9Lv2Ab AmEKGdN}npBUJf16,-lsT[*57i98lQ1FA=VIJ#|6!90aL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
