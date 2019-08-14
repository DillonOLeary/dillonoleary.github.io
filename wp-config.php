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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/X~~/Ae-^.]8Yu$t;1@PE8^nf4eqTyXRps*mi@$YL@%mz{c+jpeJS7KG34m*$z9|' );
define( 'SECURE_AUTH_KEY',  '</THjbI<J,RYD79)(fnFG`L_;!Th$4j2{w8.y4b`LlCfI{f4zppkZ%Ur^jPzt#?|' );
define( 'LOGGED_IN_KEY',    '-@&}HW3M5C 0IHRY>7nQ08dD&j3pd(.LLWS(pU)mm<&*TZgN(@cJ!ivQlII{3flk' );
define( 'NONCE_KEY',        'a1dw]/1Bd99 e-R.2(eY.tjn^kDE-@XCV7,}|]aaN_I6kM&0}}oR&=W+Wu5k9]5l' );
define( 'AUTH_SALT',        'Tw98iKfKVyU2VAHF+u,k+%-|Fw{WyVj@.It$CJ7~ZgNtc_stQ0[n@I)ovh~6VO3!' );
define( 'SECURE_AUTH_SALT', 'SMx:$9JDLgj+ luXAYRf)pP1Y-f[h-PdJ>st0Tx]/1K6a{nDv[;p9QPd|kJmTc 7' );
define( 'LOGGED_IN_SALT',   'V^d:Dwpp5K [SFx5-2goIO}<MESs-v<=],U}{o!W;&PT-B0[~~%JmbG*U!Nol;KU' );
define( 'NONCE_SALT',       ',)B~j#h7TJ oacAYn{0}MN_k~&W10nDZ6ZEYXH+/MRX!E.Y}WvVacdD#>QP9Vw%@' );

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
