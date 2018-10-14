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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', '192.168.0.102');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**METHOD FS*/
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i$}qxig}R@on#(B:+ly@8]`U%vBNhWi$xb|1*^<13L|>O]aK$gX-#<m&Tb8|{OIX');
define('SECURE_AUTH_KEY',  'xc_w_<`|Ll m>|&-V8y|1N@W^a$QT^Zrk{P|b+[m:n-MuQeq}G1=^&=P*2-.G>uf');
define('LOGGED_IN_KEY',    '@YZZF:Rx[`Za_zGE|F3Kwuv|#cc2-OeET#ugwC0;z0C/K)-rZ_ekN#%mwPFS$WQW');
define('NONCE_KEY',        '@9:$xg5qsvq5#Z@:HHDo2ln++|8wI}6gq};5:o6Q~]f,Ii$Xnd,Ilf9kFMsupX{ ');
define('AUTH_SALT',        ']jI)oJ^<4O(aV<-r)by78#OjmV428,K^LtRd%d (81qo|Hr:j&aN+Ap==T^L>%Fa');
define('SECURE_AUTH_SALT', 'h$:%zqAA=h?|>y$aqYHeIlKu~|M[9<c(7($0Qr%<w)a1o^W~KB*L||My<2Fqo41;');
define('LOGGED_IN_SALT',   'pI.*fTAKZYVex7Q_mW>JN#GU61&3j.ifzJ>V-Si*9s&U}LAN)<[~nw1+OtAB2OOQ');
define('NONCE_SALT',       '+GV)&1?p$d@WpFMJjH|PO#;7`~|P72@|:^RUuo#C0{>?d3y+DmdG;d4TliBodtp[');
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
