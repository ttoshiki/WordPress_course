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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Fzrb5asGq396ebxsEWm05cbFb6TKYeNX7BiOrUSYvzdj1kQr3dok65nXggBIm+7qh/AILhFsWNvidF6QgkVfAQ==');
define('SECURE_AUTH_KEY',  'Vtlu+uRN5IK1lWDYPxOJrxnVPNm+9zCGgN8fBZV9owUknLd0VJWYo2SAT/+Qmr7EkxEXTIUScP5NYX1GPWhZmw==');
define('LOGGED_IN_KEY',    'Wjc2qNcryG82Sz/631U+esXLcp+zAbU2EFyzXqv0Xnhutjn96unpcr4m+hta6WIiZI/s4nlXa1cHy7FE2TOarw==');
define('NONCE_KEY',        'QMSzXh4RPG3AYv+lJ4yeAprjC5pHl0VKmFiFMaC2BRyL1UdtIxg4TbdVtM71KxKrAVYz5jMXAVPd620GZGRZJg==');
define('AUTH_SALT',        'jmYeKi1judE8ildQg6MIKux5/9eq6gNavb1Y5TXZw58ccNXvJoAcpkmA5SbStKPS+N25ITPtAVrkFCClLB9oQw==');
define('SECURE_AUTH_SALT', 'Cdd8O0jOjVDNXeBwrH+X8LzttS4Mg2ku/E5WWFhD2LtQizNX8R0zoL2n9iJ/bmxDFlrjiY19xpJegBbPd4n7gA==');
define('LOGGED_IN_SALT',   'hG+B1lDD/SlzSlp4wiTl7Qjoy6Z+ocpFjtE3o/oJuwiPBklTRpR3Zw5KMoTyOFZlzmeOwUHXhea/uxHlKGVVzA==');
define('NONCE_SALT',       'zjEc03QQtnzNyxk08Thx6FFUhBmncE83N4uFb/SwkkNzsASI742RXZOgWumDCjlWYYh8IjtcOIf5Vv12wCEPCw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
