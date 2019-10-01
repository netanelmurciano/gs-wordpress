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
define( 'DB_NAME', 'gs_local' );

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
define( 'AUTH_KEY',         'H]aS.Th ^|Ex(z%t0YhU%*p-6^*D#]`?y$2GW]Xg1ui*gadb/qwgEpoF6<OV/L)^' );
define( 'SECURE_AUTH_KEY',  ');/wN9fAXft%VKj2#Bz63!=J>?y9Zv=H/62>RZJ0_O)~8$c-!&CJ|s;@!^hi5|.L' );
define( 'LOGGED_IN_KEY',    'n_IPZZ[Mbv0QP&SQb#g(KLHS_e8kCBp.+7dWh6Qu)J<0{^OX]*[Cu,n8KE?h&2xB' );
define( 'NONCE_KEY',        '0IV/gq]aw&Ds?a<ET;sFDEV$pR|Up4Hli$tt9ZxBWfe@Cy?WCSQUQj=:LhK7kso:' );
define( 'AUTH_SALT',        'cJBwl$!/K2{5OY&7Ht6-{QR`o4Y,K;bWaq>%U=jR<HgOsoN3/ EoXWX{e5kw9{ G' );
define( 'SECURE_AUTH_SALT', 'me0D (YLr^vQSobm tLPzOr3@y$#?%BX{G9F:$<I8ZJxg1Mqt`ol,nGM0Gms/&f~' );
define( 'LOGGED_IN_SALT',   'A&p]kbZ_jD3>Hic+SNJW4Q1&WxR9UsS#oAo$qws9m)!9L_2Uf9Cq3[0v`WzqJ9iC' );
define( 'NONCE_SALT',       'B/vOyY7K4GL~pO|W#K*16C$`SY+RYoT{9f3q=O~}d[B=YW,5V=jr+ZR.`Y#>wzrH' );

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
