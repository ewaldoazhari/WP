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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         'aPXj5B)zNKIe^zloy$ $f&hC$38bwa$u#[|(YO`<N<w]U%tA1OHF3GJreFz]9v {' );
define( 'SECURE_AUTH_KEY',  'LEb}S;fnc6iUp>-w.Xaep+%S*+fAl(H:*LM}(-6sJEFN6&a:S<rqEkB,_!|@&6--' );
define( 'LOGGED_IN_KEY',    'JIqHCm_nXc|]%$d-,KWSq xE|~E#A7y<,d[#3TtTHjcH42i*kS9-@7}28hNpSonN' );
define( 'NONCE_KEY',        'HW4<dN^:l?HjVk*7wdiMw@R/ ]BOGw?2<=!,4Y*]K!Ow90TaZ2{THcHm-GJvS r;' );
define( 'AUTH_SALT',        'q2=e,;>F25 ~EavBYYPW=W!>F]As*=b7:j]^tNmuYWhia!hAjF&DG)ke)!^cY1:[' );
define( 'SECURE_AUTH_SALT', 'W^lt5K^o(/|pp$B>ly#hhkV5JOB)3ynvaBSlD(#~%08&qo_2prJXc[u&w<b7$N`H' );
define( 'LOGGED_IN_SALT',   'k|:,+f99}-r ^B0][V7 6^u#o:hBj4J79;D.88|&9sVql=L`kA|,&q?=TDA?~Rp;' );
define( 'NONCE_SALT',       '/8!KO#zhsqgb)tTwC$!!rYe}JS1O2W`G 4qlp9eVew]H4:#<Iky9xub+tPXkCaDN' );

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
