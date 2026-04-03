<?php

/**
 * The base configuration for WordPress.
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @see https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 */

// ** Database settings - You can get this info from your web host ** //
/* The name of the database for WordPress */
define('DB_NAME', 'dbsql1');

/* Database username */
define('DB_USER', 'dbsql1');

/* Database password */
define('DB_PASSWORD', 'passpass');

/* Database hostname */
define('DB_HOST', '10.5.0.4');

/* Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/* The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'aLe7TVsm+UeH=O8>v5dOj%z3`[+%P/mzfDxoZoRF)$Z;BvDZw4(g0_nFsT)B`uFV');
define('SECURE_AUTH_KEY', 'Lq:~=|xD=G[_>i3%$(NxD/iY7cud0.6G7;tGl.`N2}2au</C?nfy;Qn*]Fa`.Vf:');
define('LOGGED_IN_KEY', 'Fv3ExUi! 1@FvH3zyw_O+<*fKB&.mz:(+N%=[|^smDFV8[OW!gtrf.Kr1iS)@_N6');
define('NONCE_KEY', 'o6{NOQFaW]?41 h/)Y=]1&jJ/YllqUvqazF3a.Nj|ySSq<o1Wtz>8J!b;;/K-2g&');
define('AUTH_SALT', '2xStx.!V </.^@KOq n46(-ad[8=IMbrN_BOus$ {sp20|AP0iyhJi2K<!J#Rol@');
define('SECURE_AUTH_SALT', 'Yw1165z3@M=DNFz96OdtN18?gF&>L1dOc/u&2>z5j zl$>Veu[1f?&GOoOV~*F6j');
define('LOGGED_IN_SALT', 'w|%luFC,r)U*O s40}sY.o>)B-T>kdxw63H=x0Nm`Ap10*kId-KG*V}T=$gWs)qu');
define('NONCE_SALT', 'ZD|)/pUpgz*9-{<$[xB1TS@Sl-aww^Ex+D&n4-A7{e2>-,nJ+)t_7ql%e<%HMe7F');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @see https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/*
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__.'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
