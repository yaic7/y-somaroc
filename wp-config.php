<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'yZ+o1hzRhvho4BR+C5zXQN96CbMcufNJNcCURpbSF8jlekEd4dYGjCQQS6A8O/EbUNxze1emneGPL0VxM+oung==');
define('SECURE_AUTH_KEY',  'zBEIX6QfBjy8on1YsLyo/ZVTfVO1g+knOmx/wahl9HTqCG0EWCc+0srOFTFgXIacA/h/btpYM1qUVQEi9eMEIg==');
define('LOGGED_IN_KEY',    '8x9PYUScSyQi0HTtKcKhYfW7W8szAbHL75LLCzMJO/d3VK4YzliBpa1sCJoswiH7kiz8c6XMfQ9WdkP6voGqgw==');
define('NONCE_KEY',        'h19cB/xiJV5tVgshdCJilUXER4eNnLSEfCobxbSpg7cXMcOnh0FEMFvzeDjfyZt0yWfrywScmxm0slkLB6s0XA==');
define('AUTH_SALT',        'U/PKrWJ+YNcoUvYv2nKi6pcRywrPr05MxRNyiW09d+IS1O9Sseh0iE01RRs4EYCu42mgTMNyOs39Uh2H5XyoEw==');
define('SECURE_AUTH_SALT', 'D17EP0WyEpIox7cYWp9dbHuAU183S/X5iH53zyfm4yy/jXvoUJLoHQijU/473/3pXy5XbhwBIYUXkYEARsPOVw==');
define('LOGGED_IN_SALT',   'aeMjHSjDuVIdVOfFnoX0LI/FFrVxifi49hdOFVC/aCdtyn+cCkga/qVzESRfTeIosUA0+D8FEd1iEAgNOdUtaQ==');
define('NONCE_SALT',       'ATKAw3kiC7TAim3axrYVTuuEd8aVHKt6yk34HUvNHQ0ibb/XzXQ8FQL7+dAjVQi87sjZC87cctRIVRhMvE6BYg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
