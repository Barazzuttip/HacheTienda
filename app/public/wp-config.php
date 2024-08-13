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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Pablo\Local Sites\hachetiedaweb\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          '}I_^{$DcRosU$wJ+:.`BM0e^#x;Nm,fM=liAifb#Gc*8uCEU*7h{,U1h-STn~^)B' );
define( 'SECURE_AUTH_KEY',   'Ebo>NdqH?D<6I_DC?Q6s`!JD8S.>~gp yl$+= Vo: }V$Rs>^qiQJ&6CwZ!%$o^|' );
define( 'LOGGED_IN_KEY',     'U_Wh/>T9`U%H9OdZ%V=%raR3m+_hHex<,#HJ@CWfSyPCd6LF+oxWS5LjI>DM-EPr' );
define( 'NONCE_KEY',         'x88Vh6H83MlCIY&jlurj1[/;i;xXVxSz,f-7Gbjrrd*yZAunaB8u/x~htScS1DAb' );
define( 'AUTH_SALT',         'f _)Kewx=XQiJFnqko]C&5k~!vhfE{Ch%I9}HD)gZ,Wt2gJc6O a0[f,E5ph, I*' );
define( 'SECURE_AUTH_SALT',  'TBnpt=9;6+>H`R~iqXDtI@3bCPg=!aY;:`sJBaUZ4RZN@15ZeoWL%hVDlX~n :)l' );
define( 'LOGGED_IN_SALT',    '*hXl~T@D&o$ST+K;b9W&B:|-(f:38?qwVTKr%R`?H}HG{+`Aq94(u]br._RWMOuJ' );
define( 'NONCE_SALT',        'I%j749hY3EdNM,HsXO{o6C7oYD.VPJd;If:aw+/r=H?][>}9.BebfkHx|dElYu5C' );
define( 'WP_CACHE_KEY_SALT', 'Zbx*UzUZcKQy> TGDUqYDm8(&&W>PH9Gls~}r&7kg-6,)JHZ*q@fPuFRVg0XlAI}' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
