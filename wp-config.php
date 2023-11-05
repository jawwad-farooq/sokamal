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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sokamal' );

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
define( 'AUTH_KEY',         'Fc3`zbs!&9!YLZ.o&yRoDHdFIU*sBgGVb}^6kayQZbUiMSBs^Z}VoW&i=]@f.D:m' );
define( 'SECURE_AUTH_KEY',  'Vho7K9A0^.!e*0W*SY9^MC/c$(4#y]j5i4`q_~{1O 2cN%_}b/J[K(g2~][Tfp)*' );
define( 'LOGGED_IN_KEY',    'NRIFx>/){}kl:UZ+H.Ts-bAG)~^mC=8U]w4<gl.Ly_g|M:<vL~!/rvU=0[9v=:y~' );
define( 'NONCE_KEY',        '#gGa)/0{646ID:@jN Z_/NQy<{ZE5y>;?y41|r8h>V@G$2+A:8-^3ehJCvWH$!n]' );
define( 'AUTH_SALT',        'VD^iLx.%jb1T@izq+;@Aa&Bo*Q5J d*R_Q|:.?j<4w5/_+uB,f=Wk#!1yV%P /,t' );
define( 'SECURE_AUTH_SALT', '48oeR>86$^&yUyQ!kUE5:J5:m2M3$0gee1WMU})izr>a4]M1+~|,PunK;p*+fL9U' );
define( 'LOGGED_IN_SALT',   ')[C!PSC?r1PyLSB]@gIf12k yckjD;GqNP?Sq9|a~r*=d*!H%}U~k_a]ra$cN}xU' );
define( 'NONCE_SALT',       '.(bBI!h$&)%Zk~8)SQCk3|x~~q- ci6/H@~M?`2>Iu/VM6,oG]EJ$<pu~V$=6#7>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
