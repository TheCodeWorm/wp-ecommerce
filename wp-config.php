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
define('DB_NAME', 'thecozwf_wp119');

/** MySQL database username */
define('DB_USER', 'thecozwf_wp119');

/** MySQL database password */
define('DB_PASSWORD', ')up4S79@0v');

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
define('AUTH_KEY',         '9obrc70q0fvrzwnrcmtlkl3ydfj1h2pyjw2beqyv6ynh9iu3n5f0ai3cc4lma9wr');
define('SECURE_AUTH_KEY',  'mmpdrwnt037ai45ulfvk0hjotu4yk5d0p0rdcdnk43tdfteb9xkfzt6ddd7tskct');
define('LOGGED_IN_KEY',    'n5ojxorkxtdkob0vvdebgdgcjc8lwy2b66xawe996kb4ed9swcllavn30gtchmzj');
define('NONCE_KEY',        'quwvjqy27snkmbg2iugk3yosspvsbq4mnckfhdglrlvdjfqxbtejke1nzddg9o5j');
define('AUTH_SALT',        'pc3ehcg3x48o220p7gb3uaymfgft7pumhpjo8hbmgs5okyvcibfnej3c3l4crbii');
define('SECURE_AUTH_SALT', '0iwaxglhlmgbwa2klqq8fmzflanplxzzjglnblgdxouwlnohblggznxkaqje0h8n');
define('LOGGED_IN_SALT',   'ldjfqf4whpmawboqf673evkjv5sznk7hroxndevx4tzlqal1kmxtga8qz49eoilx');
define('NONCE_SALT',       'vlqwmauthsv9rplhch0hrrkmxwip3kttvgxedfdtrxy2u0vc2hisjjtt7nillscl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppc_';

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
