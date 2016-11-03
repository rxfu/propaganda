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
define('DB_NAME', 'propaganda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root911');

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
define('AUTH_KEY',         'KUu4k?BC[Z/tGFVEW]zd-N+AmHwt-xaRrVq,;W_Kr<Dld)Z4._K$SYxH<l{QPVl.');
define('SECURE_AUTH_KEY',  'OQ%$EMKuw]WanM7DG)M?#!!h5YnvIY|Cs<I8YfNYEOc9)2{V#-k2hf6U]Hr@|hGL');
define('LOGGED_IN_KEY',    'D0wgkyeR2*a^R4j5<;b1C7jK|:I+~DjUQbgF,QSXR7C[4{w8?LIA+1G7Ab_I/2m`');
define('NONCE_KEY',        '%.A3qw@!8H9,pY?Vuzr_dbq&@MkL3}dTPL~0znh5E)9Z7[8c7o#v0)_bD3X/Pn D');
define('AUTH_SALT',        'WAQAj@*@S98FLNs@V./p(4nudBY|Lix6<l. ny2XnsKbVD^u58&iifq0~,xk?OZY');
define('SECURE_AUTH_SALT', 'S1sOY;>$!_h+tNQI)86]`H;hj~d(C,D-v*^ADi@S<W[Pn g]Ge.f@$=S^`=9h2=C');
define('LOGGED_IN_SALT',   'WRUSP$Jy4A Oz@~}1y5uq,,->&8-,#%-SG&PTitK[f1^lfsYLx$ax?B.&LKJL3sI');
define('NONCE_SALT',       'tY#V,Ft1Q&+*WYAuu m!>)GfK 1q6k]YQw09TLEPq)T,2F0K2j,lK?SG&3hPVlQs');

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
