<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CACHE', false ); // Added by WP Rocket

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

define( 'DB_NAME', 'vilasmmo' );


/** MySQL database username */

define( 'DB_USER', 'root' );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


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

define( 'AUTH_KEY',         '/jS6Z^8uggj}d Np4wN`7>7J1Jb:?go=8z_{Z#H.c$[3[*x^AIIh?Y.a@9fn)Wmu' );

define( 'SECURE_AUTH_KEY',  '?!>[_k%a>A;/vl6 #/pwKOQ^x$[3Ow8W.tX7[1?b5Z0k9kwVH{V4c6]yn7/jmniZ' );

define( 'LOGGED_IN_KEY',    '1LK>fgFhzp_cSoqvz,t$J>*pu~aN!49m^)QDR;S?[(mVt/k= QOGP(_*|+d?!Am<' );

define( 'NONCE_KEY',        '1,U#TW7Vz^){s>yBt&o5W4y/_W8(c}=DRh0n/f0R34c*:Fb^~Hqgcq8.-Lj0Cf#3' );

define( 'AUTH_SALT',        'u1PN2V]>9Cj )iBl5>iH;qr1`1,;}?WzifiU+{T%-KWkIL+PA4L+#/`r$0v!ZQEi' );

define( 'SECURE_AUTH_SALT', 'MMq.U/mDPxEQsTo1v4/I7,Dwq`Hd##)OKZ/IaebpuXu2MgGcbGsXGUPS k%I &HR' );

define( 'LOGGED_IN_SALT',   '{]e;}-!@%p1i*U%9d);)]~A>jKTr /dh+lV!rr#79kK8#Y!wumUq59-lxi>ob|^d' );

define( 'NONCE_SALT',       '~!+Dto$=uib2_8_8rX3eD6Y7*Ko;?ZExdkKHB^jBnQVPcIu8(2,b,=f1C!H9QkcU' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'tool_';


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

