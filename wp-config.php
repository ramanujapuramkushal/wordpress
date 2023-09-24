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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'L~RciLt0A[Hz4RW9k=UZ-8:?DR@ZnmrZf9T9!fX/,cu|OAYD#e8esBix]Z]7b)xq' );
define( 'SECURE_AUTH_KEY',  'Q2c$CUi>Btpo{iTE9U5.-Qt;}&<m%h@cIyXM>,Nlj]{krR~f9Q3r)_6eD5cAUgm{' );
define( 'LOGGED_IN_KEY',    '#wwWxx+W%yZs5*xwq^Cu;NCB0~d#{} (=hSV7LMYa3nf,lJ8x!p}f,#N}5Qx?~*s' );
define( 'NONCE_KEY',        'LPbop|q`pWnf+-yAZxZ3REcA(5g{<J}}fhug&JHYbgNP%s[e82V~QhNThC5n4PFD' );
define( 'AUTH_SALT',        'b>3I(u1+#EFJX$`U3%g{5<u_Px{<yVe$FK+BtTvL1DvbT8g c0|Md3?3&F^_%0Fu' );
define( 'SECURE_AUTH_SALT', '*_q#f0=t#177Z`&xK n:dM`RV4e/|4U#2/L88FQL#>%4:u7REs;{TG/(;$ljuLJ(' );
define( 'LOGGED_IN_SALT',   'UPT@##N4r7d^-pd7L1FS_RT&`p[a}&:b*=c8hiAn5~$9>?SfB-nN}ZIUa1Qw[. (' );
define( 'NONCE_SALT',       'a?Z>d~MV{&nYZ!]y-:Gaqv&.9/XtKpKrT!8sh==CswYH`mI8&|3k[aP CN7s:I;_' );

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
