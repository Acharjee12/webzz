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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Anik' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gj14ex6ryMdOc3zr' );

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
define( 'AUTH_KEY',         '=8@/TLxqQKim/~X%GcS5hEFbIMBzcO2{}RajH,jl*t]z+d0JqC0P!<~ %YK0eMw5' );
define( 'SECURE_AUTH_KEY',  'L80xruoL_)V7^7`rDAYdbX*l;[rOA<nuYN),jekhF49W7S5KI|*BdRc}@Al%x&Qy' );
define( 'LOGGED_IN_KEY',    'v9_zljGcc}%.dOjU-m&:?BLI`MJ%n?PeY74Q8leU(#t6EzB! !PW0%Vl-k/@OjB`' );
define( 'NONCE_KEY',        'B|LV8t92GjG,0Kh36ueKN|)/ Sd+krnl^@Vu}Y0xdo{DB,6C8f_z=C9.Clo}yS%K' );
define( 'AUTH_SALT',        'A|A1741PZ~Cb2,jBA^M#cms?J~ns<;TM 16.bU (JaR24^/Pr*--u:Q6F# `Ys`~' );
define( 'SECURE_AUTH_SALT', 'Q#6WuEWu/ HB=y=@dQ.:m.5|9mU-?cXE+,R8[kGz/h&GZ_is6z!%1H:Rqyy#|gpS' );
define( 'LOGGED_IN_SALT',   'J@0e}VExk0DZU|X0? LsyPD{{H,nsH(Ed1&i8s>GsU ]SVtMeY2tV:5uqWtDP|kM' );
define( 'NONCE_SALT',       '5)5d2R~*4$z`Bhc^Z88EhZa4mzL:h&[OaM2/p2bfuLj}kCm&@mB?-w;>g00Jlb7<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ab_';

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
