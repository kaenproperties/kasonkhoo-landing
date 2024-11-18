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
define( 'DB_NAME', 'kasonkho_wp_y7rde' );

/** MySQL database username */
define( 'DB_USER', 'kasonkho_wp_5t80t' );

/** MySQL database password */
define( 'DB_PASSWORD', 'l8iD@sGe5ti@T2wC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1(FT;)FhPcV(*6[67~G@9ped1%p8*:*nm2CU09%~k2u5qC7|8VMzx4/R;6%v*o4p');
define('SECURE_AUTH_KEY', '4LLD-+W~b*tr@62549N87994X[-W_:Uv7GlG45(mtTb62Fh8B@Y+f+/nKKCT3M1w');
define('LOGGED_IN_KEY', '91Pi6-I25*bT3)Dpzm36y9gJ]GM;kTe0qw_Bd!f29;@21jI96KMp&@l%+Pq201-M');
define('NONCE_KEY', '6zZ:6ozN+)B5mN%NOF!9Uvadg0dzthqL(%5n8yWnr4R42@8zkE;5C1_a@Fs311&!');
define('AUTH_SALT', '/xQKb5#qExDN(2!FRh2f!B3AqF%*7|~][zp:%)78;n+|:mey5FGu)75OeG1_rTz:');
define('SECURE_AUTH_SALT', '~r891N[CJ!30rX44G97lDl|P-G;/8M+S~*d]P&T_w&2n9Q-7#A(jHj@:8CnI7g8B');
define('LOGGED_IN_SALT', 'Ip(Fk5:BQ:at8zbd9X7Pp-[Q]9;0)05XCj-i_9a[n*j(blYL8A#@6HIipQ7y0w|0');
define('NONCE_SALT', '2:o&lc#l|~!;X(f3%3[36[49z9;9*7&ek(]//TK-5[5Ey54WXw1-&bQC17yi:GO%');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dXmXuJp_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
