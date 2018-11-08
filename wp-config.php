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
define('DB_NAME', 'landsale');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'amd933570029');

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
define('AUTH_KEY',         'O~<1dzpwcPQ4dFJtj!Bs/1;2{P?f,brde%z$H,Bvd=6x>n3*W.ZUf|6S(<KY`w:i');
define('SECURE_AUTH_KEY',  'yq<2;;:qA{cu/JYX?|*J%Ajp-~@:bh<=SS+~VD9o9@j!l6J[2wb|]*#</EIQ`Ee ');
define('LOGGED_IN_KEY',    'g$6.UvO1{Ip@q}< 27ddNH~#VS!eV)sW/COUG-hp:]5lh_LT[NV)7Fd!W~Jiz*>G');
define('NONCE_KEY',        '~@[wA+YB5}^fh1 03k`Zy/#n}sO~F%J+ mSv43lXf<!>mo7z<-OBV^-KW-g-*AsZ');
define('AUTH_SALT',        '9Jq62n>!Vb}Ya^zQ-oj{om!B6fs`ZS6e@#3*esQN8I+i_pIyju>`,X5P@N.,j)5z');
define('SECURE_AUTH_SALT', 'cJY*G9JTOER*Nn@J!,H=1JwLZuch(:cDX}TBMR<N,|Cp%XqE2[ulL37Tx1QTbbVf');
define('LOGGED_IN_SALT',   'H<_g$R_|T`jAIqNy;D?jF`CdY-&)9JW7X:YCK-yZvwztMJ)Mt69OYpSD2u&KcdgW');
define('NONCE_SALT',       'o>7nd<2oP1qAK{N ;|DoZ0[Y!fi+zN,DEs%y(85ZYj/<X({<pp %Zsp{[BU3jvS$');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
