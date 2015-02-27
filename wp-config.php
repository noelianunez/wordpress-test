<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ec[lof7? *UM3c:RI4u=:7H#PA~}s2ya_Bzm!fgD9-%72Z#@R<MI1R:rhY|sqG$#');
define('SECURE_AUTH_KEY',  'k9KX#yy0_)Di6mnH<zqulE0+Zqf+bnL$&EBuP3Yr`D:.C$V.Jpl/FT]6p7/Ddu]p');
define('LOGGED_IN_KEY',    '?$U?7jYR{iZ6(,p^icaFr~sHt9.g(C,8m86u<jAGOK*2f$/^i1J@rYGe#XO 6Zcq');
define('NONCE_KEY',        'X7ei,K#T3Y4m-,u0y>C=rfg,^W/Yj3< ^}PHIbbC|GhFGWnPS?5qd1%)E ~o+D[^');
define('AUTH_SALT',        'OF,_W(mk2..y:O^/rq{2=^dhN(a9%vR_f5-rEljF :C~Q Uv_*J@s/T=]4MH@:XT');
define('SECURE_AUTH_SALT', '9y.EGI:TIcy9QuaAf!l}~|<JJUB8jo$QAHl>u%CRfr8-sKvgLpL*?O#|5svZ*z+l');
define('LOGGED_IN_SALT',   ';uf<jK]n*|L5=S &[aF{oP{jQm{gy(fvBuBym_8 6(.v-!5;~DP~o=[lXqlVn<OP');
define('NONCE_SALT',       'GeWb@aaN6La/ST1.D-J^;D MEaX0;&9E+4VM0kEj!uwL1DFFS5?4&!)HElMe/BER');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
