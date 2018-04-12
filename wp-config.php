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
define('DB_NAME', 'root');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'N`62[=1z &[D@,7k)Lo9#Ng{IIjTLD_]bS5K`]?g|L>O>&3oaPt2}H:Rt/ax06=j');
define('SECURE_AUTH_KEY',  'OTt9>^*UHoUEH mss2:?] c5yvYT7ikTFgG;-:J{;#]@j?9Qq4ez!r[XgaD IEzW');
define('LOGGED_IN_KEY',    ' Eh]8X<b-z{DF+NB?%0iNEWDNVMzJ7`%#d`6d-!&hoId1+%~:*b_lG`{-CTBN-07');
define('NONCE_KEY',        '5s^6TSUXd7tzrfR%)}-~me]m`286T!Q,^QFjq(5,C{`#`XWQeM0(4|T;21ljG#1C');
define('AUTH_SALT',        'o95eWeUhU=~Bdt5 xHZzS6D+e!pg./]-<n:Ftpso41nbw,9M-g5j}uGGAiy1zV(H');
define('SECURE_AUTH_SALT', 'xkZHo)]pM@8OXAbWe,,S|{?A_ig1c|?9`[r6GZVikMcJ:;Q>mXsezf 4;.;BV|<;');
define('LOGGED_IN_SALT',   'pi#UV7@=Q5L]cXzoD=98fv`9G:CQH^J66,I5%R-)<Y3Q45>}0;H}um,TF)q?z:^W');
define('NONCE_SALT',       '#A6:yuSzs EX?r.N?C1YP3S`OcN=1d`BThhmopZ=2KAoP8ZjUA6:5b5:V[YxG@Wg');

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
