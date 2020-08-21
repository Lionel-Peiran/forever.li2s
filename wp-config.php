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
define( 'DB_NAME', 'forever_li2s_coo' );

/** MySQL database username */
define( 'DB_USER', 'forever_li2s_coo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AByHKnpQ8X' );

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
define( 'AUTH_KEY',         'eKC5YA:[V-S;`OgEBV^S>`s7-82mNplp ,ey?0zW3lUMY,~C(?Nl~[OAOjXl_A(U' );
define( 'SECURE_AUTH_KEY',  '<yT::5^9xruSzJyhQ&vX><?:leH9(u2D%%Yz?o*D;TFFoH,ztqEOk#UP6k)XZ1|,' );
define( 'LOGGED_IN_KEY',    'b9WOhH& -9!ex?~K{21*aKw,z.e+B8C_,(B`pKGim1>%x^O4a4{|&i_g53NF)`Jb' );
define( 'NONCE_KEY',        'hZs)>F_HyBLqkV$$&p!#i*=n{JSr3:EoL2#Ezwle{6ZZ1LM^Y#j4{p.;N_A;<5Jv' );
define( 'AUTH_SALT',        'xO#Qnu|) rd9R}eZ q5$@f*e~[-^ot(3[U?j )e&(MA^%BBWMLN6$+D77?l/lsG^' );
define( 'SECURE_AUTH_SALT', 'O;|1aj*]@gh.>SqDVIQDU1we iRspEn>.=Dna2hWXjVB9R0xN!ce&H OS?UrsDbL' );
define( 'LOGGED_IN_SALT',   '..G}pUMsK$U-o~7Wg{2:G?>_Oc*ITZ=kC+:$CT{Bj24KYPN)e5vJ7#R?R/T5:%$0' );
define( 'NONCE_SALT',       'MI9>tss:zlm*chb^3Qt0K8MO!XxJ>zwP9fs+J$~FuIT!B}=9~+fr/z~q{~x&4jcn' );

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
