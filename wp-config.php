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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'DM&nP86Q4jE.s)q4:YbzDZOKmq2Pn)a){Qs!<1?PE8As|``hU[63eT0j5pFxI58B' );
define( 'SECURE_AUTH_KEY',  '16[:&Rb5B$CO>R%OGL^P}]hUUj97kJ2l$})<R[:qEqaspry,fzKA]b@HG[6B-F:x' );
define( 'LOGGED_IN_KEY',    '::3eg-[g9XsF);j5voG^)0i_:DwSNEmX-ZWxik0ZW6 R>4tF/C+p=Qjc~H/9Q*`*' );
define( 'NONCE_KEY',        'SS& ,ZB5rL?Oy!6$t=2>O 1,OsI}x>_|S,Fyx[Rb4-QsVUg,`x(^[,5CW>$xGF*X' );
define( 'AUTH_SALT',        ':Hfiw`8pACN@UWVVoS|MT!r-J}D:CNyReYS/9}CyR}:*3`MS.<uIkF|r %aBtn=.' );
define( 'SECURE_AUTH_SALT', 'W$DfEs7M&#,m?w l&I.MV~mt7mTy]ymy~Ua!]o79P~}Y=fN<iyQ4y}I=b]KVn}SW' );
define( 'LOGGED_IN_SALT',   '*s=R#U6jU]cf)hoK@}+Xkzf#W?2JD?zoKkiFY#BlA,sQp8*a=~)W)D3r[%[.+0;%' );
define( 'NONCE_SALT',       'z5*bUU,cIQGf5AS8G:xv@1@/D32Q*. =AZY] k@2uZIO0vYd6O5W,jw<4V:v=_FW' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
