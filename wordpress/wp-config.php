<?php
/* For deployment validation */
/* Validation for ftp upload */

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Wp@dmin123' );

/** Database hostname */
/** define( 'DB_HOST', 'mydemowp.mysql.database.azure.com' );*/
define( 'DB_HOST', 'mydemowppvt.mysql.database.azure.com' ); 

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/*
define( 'WP_HOME', 'http://mydemowp.azurewebsites.net/wordpress/' );
define( 'WP_SITEURL', 'http://mydemowp.azurewebsites.net/wordpress/' );
 */
//Begin Really Simple SSL Server variable fix
   $_SERVER["HTTPS"] = "on";
//END Really Simple SSL

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
// define('AUTH_KEY',         'a2m`u/G.-=B0s%9l7|2eh-{,Q7o1&>z5u0OM_-7gYB,mZ/X1Ag:o7sS_V1NZYC|q');
// define('SECURE_AUTH_KEY',  'rY9tL}Z6Nnn{P|bw}99))y}G/2zr70+uH;.+nTc_z-RS%@L|<;y}W0%|]syTc.t8');
// define('LOGGED_IN_KEY',    'Nn_dA{KylTE t8l:&$p(r`UB+Gy;%G/yPH7$tNPmX B)AYBA:W}P#q/|%E&[8@fP');
// define('NONCE_KEY',        'xP`+mu}i:l,sUU5N`y+3>YH3as$^G]xI/5gdxOLUhlf}TIodZ#LGy-!qZOUl/$@0');
// define('AUTH_SALT',        'TpyligF5NkE3)QH!T-o;c@(?<hl7Pjb&%EeM3[F?--qIMU+r#K ePKn[d/+n_n7:');
// define('SECURE_AUTH_SALT', '^3no4V^Vj#8;R>i@LSXpgzZcgy(u;%OdLHPB1=yM@ TE+dSL5%}L}W3k[ l7@q70');
// define('LOGGED_IN_SALT',   'tc4G&+/Dm!>#f{R>KYh|^C4b,D*LDJ8Oj,i89dCvo3>%}ZLjZJ3Cfs~oCW6#JQ#:');
// define('NONCE_SALT',       'jw-e:s$z(twq=n|mLxnFev+oi18,Sm-r&FYCqr]Cq_B*?aiB0jn16W*`!.|xAkv*');
define('AUTH_KEY',         'a2m`u/G.-=B0s%9l7|2eh-{,Q7o1&>z5u0OM_-7gYB,mZ/X1Ag:o7sS_V1NZYC|q');
define('SECURE_AUTH_KEY',  'rY9tL}Z6Nnn{P|bw}99))y}G/2zr70+uH;.+nTc_z-RS%@L|<;y}W0%|]syTc.t8');
define('LOGGED_IN_KEY',    'Nn_dA{KylTE t8l:&$p(r`UB+Gy;%G/yPH7$tNPmX B)AYBA:W}P#q/|%E&[8@fP');
define('NONCE_KEY',        'xP`+mu}i:l,sUU5N`y+3>YH3as$^G]xI/5gdxOLUhlf}TIodZ#LGy-!qZOUl/$@0');
define('AUTH_SALT',        'TpyligF5NkE3)QH!T-o;c@(?<hl7Pjb&%EeM3[F?--qIMU+r#K ePKn[d/+n_n7:');
define('SECURE_AUTH_SALT', '^3no4V^Vj#8;R>i@LSXpgzZcgy(u;%OdLHPB1=yM@ TE+dSL5%}L}W3k[ l7@q70');
define('LOGGED_IN_SALT',   'tc4G&+/Dm!>#f{R>KYh|^C4b,D*LDJ8Oj,i89dCvo3>%}ZLjZJ3Cfs~oCW6#JQ#:');
define('NONCE_SALT',       'jw-e:s$z(twq=n|mLxnFev+oi18,Sm-r&FYCqr]Cq_B*?aiB0jn16W*`!.|xAkv*');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
