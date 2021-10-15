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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing-wp-1fTgpvgK' );

/** MySQL database username */
define( 'DB_USER', 'bAJtDk97v6X1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z4RMmNAmyrHFrRN0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '10@8RIHj]v!:r$.vP%~D#:;X!.W:`c5mIN^$LK;w>5r_!O,637 ThQn,GtPiV5q4' );
define( 'SECURE_AUTH_KEY',   'usHP@r4m^lu1[{?=VtT4ZVeRP!}+rv(7OLT Jz,SkUGR92!y3Es._+LR7>(wcVv8' );
define( 'LOGGED_IN_KEY',     'gH)CPFm/h==c:!2+0?;2kxj?3 `i?S^-4jZ8Z`tI_vdq:9W,>6P}B*BF6l}H3jcr' );
define( 'NONCE_KEY',         'O%KsYhpSuVc(mid<M<=9_&Gg^LHouOdo`C7x1:7VuqE+{RLf:sCOi`vqFvQ$a]*K' );
define( 'AUTH_SALT',         '5i~UnZUJj<oWIDEpT7,5rS_rI{fyqeRTt@3p&%grH|0=xK/?W:>,t`=I@4w7rqGh' );
define( 'SECURE_AUTH_SALT',  'ArK_-rru/x/Z|@k<7f-GGD*v{0~)7)!W{tfvOZh2xh+|Tl!LXK/z/@:hA&;{b=R1' );
define( 'LOGGED_IN_SALT',    'L.+m,f[XRjq5}^PDDHLh*zg#:J)5gbwnH(k+TC=Asq#oEv0CqzkO^$meH!WdKK;e' );
define( 'NONCE_SALT',        '{bm1~xL}a%vw3m#-Lee;W:rP9B9 `^v,A7RFsC~9+7eHmQw.NUt^P}aL}x>Bx9k>' );
define( 'WP_CACHE_KEY_SALT', '[rd.atO;[]PJXUmIy?j`]2h<FIoE !YaSNO^;dq,x8C;Hq{v&{ng]5#N8&XgF00*' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_f3e2149942_';


/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
