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
define('DB_NAME', 'rosa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '_~d9i}{qjBI`irbVQXs!K&Tj ).L~{^KnZF+^=|1@PM)D_YY)rr,(,+hUzu]3Naj');
define('SECURE_AUTH_KEY',  '3/=S7;t+ GR|T]~%hbf5QaM)q_I!qk?HT%ti,OI,,58H4Cy#-$Z$0-US$#;>cJr`');
define('LOGGED_IN_KEY',    'YRl]8o;}6.~ &LIO$upZH,lM!CQ;0W}RGc/:?xBC,)#;rO=i[Gn:p9}K-JukpVDH');
define('NONCE_KEY',        'Q(W$xs3w>4#Q;1I!hH{iO3+iI~<ch` f}o:A=#G.kJ*GP,#WXtHA3)#q@k` ^|gK');
define('AUTH_SALT',        'f+h>rfSu&14l?Y%v}=I{2W]7k wIUkCBJ-?:YoH?3H-o_a69>VjGm=vE:i4>zMxb');
define('SECURE_AUTH_SALT', '6}(_aq(qN)8vH)smGBX$/hw>Ob;hB]O&.Mn1neVE=6=i{yiO(q#Y$v)>#?FGs,9l');
define('LOGGED_IN_SALT',   ';@3Do4OfzMe`61(NcdS~l 7W}+[hJ-ah/lqXl*V[Ay|d;;mB<[@X>WQ[qYl;rv[1');
define('NONCE_SALT',       'va<J/l:LM.$#E]em!~OC/>OX+Trw^F: hI::ANl^!n2rK93]id/.GXcoZ{e7=t)=');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
