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
define('DB_NAME', 'gbtest_geekbears_tes');

/** MySQL database username */
define('DB_USER', 'gbtest_geekbear');

/** MySQL database password */
define('DB_PASSWORD', 'TboGCG@}Bmj_');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`jKI_N El[pCoXF)j]Cz}PJM?3;`>b8Wx $2g6}Lbw1WG)h13tVUYtQGC=P?H,pt');
define('SECURE_AUTH_KEY',  'Wrm,|V|ni#4E{N-;h2gT(X,GRp6j.=d.0?deqIY10|CF6lcc*kPl>k4wK56z-(k6');
define('LOGGED_IN_KEY',    '*Fr}N?WFp/M6V57z$GqS%lb2S6W/^Vb*Y/5)p<^%5y&#Gs:r3$x[ISqoby.B@1d!');
define('NONCE_KEY',        ',m`XP3TjLH~Bdz?46ovh3mtG{?Dv-8@0b58jzs;ZyGtqh8EB]UYevZuIzu%S|].Q');
define('AUTH_SALT',        'XkY;p[S6`(},+maP0hRj.#X`#]9]04t<v>3<Dc%q)chZ-M#&*vUcl)[%x&k7/@^=');
define('SECURE_AUTH_SALT', '3IA~3Qmx%I,ptd9(>ani+ZPx)NGGh6MuEu0}S7[,AWQov+uYV4;>nBx`&0zSlU+>');
define('LOGGED_IN_SALT',   'wJQ/u:$4~5>cCIthATY?aE.9dZeaW]tv[cL#FxN^jE(lX-]|TI|b8s&* >Rq=d%?');
define('NONCE_SALT',       'Td; U4it O1*8O|a,}$0x48776~&0:HyBGK%0.ua)}oo,!T36Vg}h|UQn/(sY{X`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
