<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loja' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(55rhuXI|W;g!S4-pMBo43mE-c;{*:X(pDr&$wVFUvAZKFTkm7.l!aAGG,}<.M^W' );
define( 'SECURE_AUTH_KEY',  'hb}),fyfHF8DLQ=n=%`IF;u|Buq6:$<z[-A]uGN,Bt )0+fr&3`|T28rbhI8=z|Q' );
define( 'LOGGED_IN_KEY',    'do5Sv=foLH.};R[}}#RFK)tku,-rtc n=VhO/%d+p?WZ<kMUscmH.%CA<,]g$QDb' );
define( 'NONCE_KEY',        '6U/X4] (;YbUmCV#$&C6=,1%N<2fl8[.cw<.2+S3vCkzW&4^`P2eb+8gvalRO#Ms' );
define( 'AUTH_SALT',        '@!,uHP<u*{dqE#2 Na/i&qH=ol>wU~AP1-kk*&`I?H~XBpg|VD#F}&4 SU#~-aL6' );
define( 'SECURE_AUTH_SALT', 'uY#J?(k*3sJ.qlYKE48~;$6HP3hT;@4ZvQ<4}/hxk5f#G%mWW&{yTw^3jKL?M*#4' );
define( 'LOGGED_IN_SALT',   '}8h_$<~{XZ[!>:8hT94O%=h Ke;K!f+++rG|U99FeIBrVe-|6#RaP3NyarqEf_nc' );
define( 'NONCE_SALT',       'lhZXY*iS}|mXmZxE.G&mu 7O_ob7e3;pE&a,rSDp 9M*fB{/R.X#iJ,` 0NN^e`t' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
