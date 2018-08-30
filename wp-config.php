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
define('DB_NAME', 'mojodigitech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'www.994.com');

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
define('AUTH_KEY',         'TNZKjfbiy(Bs[^jmKG;6T~}c7X+6glCM>JX+^`eL1O?+e`GztngB:Dt4J4PUr5km');
define('SECURE_AUTH_KEY',  '1(t5G$v!9FX&@!0o@KP<1FEUxe{`Hvtw:r}+E@[fH0gwEw=OL&JimBV%{#,Nt,,J');
define('LOGGED_IN_KEY',    'k%Eq:iB.zC3AD`bIQBq_D]pR_%W4iYJ&#TYt9WN_Q{x5;YS>DL:^Ggo21HN*EFJJ');
define('NONCE_KEY',        '[xt?{>w[T,wY)j>GuH9@Xl:9F|*r5939UF{pI~cz,T3W}({k=k5??A,u3KyG}Yyn');
define('AUTH_SALT',        '+Bu-MhwF=ry1_b%ZfX]Yl(d~v^k_*=673jcT}[AMh@Or#i v~n1Bgu/m~Z+#Y#{n');
define('SECURE_AUTH_SALT', 'Qo..Z}-A><k^8p@S>XP_7N6-SV1*K_~CXv_Rp6ag_ohO<4JB7)sQbKI9/_r6)9x*');
define('LOGGED_IN_SALT',   'zZOFoWxr_uoyd`):HIj~]6g1v.*N}AE9^W !pW{6nWLnP8 K#_OK2nrz=cM9k9FX');
define('NONCE_SALT',       '1uXh3{a^faCCXYLsrp/;+)u0IRc>D3d?[}U19_Oz.,fhhKMP*T)0a64ylz(ab]t/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'md_';

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
