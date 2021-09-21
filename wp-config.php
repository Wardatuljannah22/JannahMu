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
define( 'DB_NAME', 'Jannah_Mu' );

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
define( 'AUTH_KEY',         'WdYi.(Fu%AN0wXS%q.2f/)=n@!0Iw8-OkOt+:3*asJA8:{_Jbd!KAT/>iuf,gIgB' );
define( 'SECURE_AUTH_KEY',  'r6-%lZKGPchfMbpGdN=v_~/]gH<O7=uOyDyBZI<E~BK0WfENs1&B|U*Z5yA(v!in' );
define( 'LOGGED_IN_KEY',    'I(*iPb4wFQ#$Xj~-k@}K,Uoq_tkIi8e.4Ype|_gXLZ?fG{U_nqm $Dt ~])M}2U<' );
define( 'NONCE_KEY',        'jyLT((205!;Ts^xQ~H~lk%=i]?a <$yRxG@xnP[7|~MwY$*w!Cb-NuCtPQEo8%@J' );
define( 'AUTH_SALT',        'Xv*$G]b0ST4*y!**N%[2(XWwU.b?J_D9*1 M>rf${|N0n_ko{-T])h=R/MXr{b|}' );
define( 'SECURE_AUTH_SALT', '4-Glhddg+p#GMEeG[6JXSTw<<S_zH2yxnBq eZD%i{47@Z>ty=eueS!oC^s{cA9B' );
define( 'LOGGED_IN_SALT',   'Tk}zZ,T*AQkW3p.q{=TIs2@-W_ASw(&VMd/)@!fy,(O{;;MPXiw%Y20/%?$Q7%R(' );
define( 'NONCE_SALT',       'i2t6gJ8Y4;-N$/G3z?`0f$Zeq_j{I]dy[:Kg8:T@hGG+cIMIL?s7$muJ{(:;ocTW' );

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
