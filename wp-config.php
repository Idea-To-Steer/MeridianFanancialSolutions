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

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "meridianfinancialsolutions" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         '2CL]%/D+>+a(9{nlS2_*Y3gn~!s54Y7S?z{?r7mLUm6[9y+BJ#,d=18n&&}+2n?a' );

define( 'SECURE_AUTH_KEY',  'nsuz1:@7$_Z]QF4;1sJo0T1(aBGu[K^$fjqTYgT$SZhVSg`3y*mn&3_jbFqHG6{p' );

define( 'LOGGED_IN_KEY',    'srx_#]=?G_[%Lglvgmg^E$y8o7NdJhPI9dh<,IMq7lmnIkRb8w?emqoijObt2_@e' );

define( 'NONCE_KEY',        'KbPu3wJ>0q^Nj$S%~0]BL5bldkVnRq.+A==^+=e~fHBUSS|7)xKFz-1L0duv1K$L' );

define( 'AUTH_SALT',        '8m[tZh~^*aN3BQ# I3xkS-WibwBU,DRytv*fRG-G$XN>W(d1AL(qITw;<ywu4C#I' );

define( 'SECURE_AUTH_SALT', 'Twbp^JatxPT<T%-/^C9_APr[~/O0?6OvxV5,_e>]r.Ip3S:!V*Ou5Q7P.K.lxddc' );

define( 'LOGGED_IN_SALT',   ')2;YMK0vVD^>F[ZPA(W$[XKmd>S RU3-~<<2&-x][KZ~tRsFbe&}8w!&ZgJ{(^eP' );

define( 'NONCE_SALT',       'U_2H}}0QI^d<boypD@FklI9l7or&N75)ItyK)!-_VBKK@7V0r~odk9j^[Jgv{39k' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wmeridancep_';


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

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

