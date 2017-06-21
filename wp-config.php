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
define('DB_NAME', 'db_stylistic');

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
define('AUTH_KEY',         'Q%ZFCLrf(oW5gAw3-oSA?y4<o@L.?~dF.[ ]TBvL4[DhV;h!icxT`r6%< t!B`6W');
define('SECURE_AUTH_KEY',  'Hbl`i},*&T&MZ02T_ysuQJ/Gh1):QsjE% n]G.G^Y8k@&g[j|?e)Q.zv9qw!M-5i');
define('LOGGED_IN_KEY',    'F7JtloW>F{[6yfqG3xv:$PCvc5E9X69pQZLOSK^nF6;$p` |HjeW_[#|sdJlX9{3');
define('NONCE_KEY',        'nU4aEyCR~}|i?sFz9|k.=OPTL+pIs1B5%t5?O<}1b4>vv6DM9GbPxU,eq%Mk7?CL');
define('AUTH_SALT',        '.ML-$5VsjE`[>iJE$u[R#+N74i9~ZY Gywe-H8+2PQ_I)B<eJiWL`LA^E#XsYkZ_');
define('SECURE_AUTH_SALT', '|mCU6)nOOS}SYDh0O.,ZWvO@<<Hul66zA{Ik,3+GC[VD9E;(-%qL}$=Do<tx8vr}');
define('LOGGED_IN_SALT',   'X#2ng&Wjk{pg`VCA|C,Eoz#vxt=wF.jWX6UT$Eez+3qH[bwSvP${UcuyIPqy@?>)');
define('NONCE_SALT',       '7>!o_BD$V2bJc(N<_4iQzDGCcPX2e{XN3e2.C!fQYl_AQXF!ec]P.CL~amhM9,4Y');

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
