<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ptjobfus_wo0242');

/** MySQL database username */
define('DB_USER', 'ptjobfus_wo0242');

/** MySQL database password */
define('DB_PASSWORD', 'FwJPWOiz7BsY');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'mO(njBxd[v^dGpMyMg@{N-{%?+LUtQCyCkYruN&_ttpzaPjNKr>k{mm*od/|WW+}Bq//V+_T]B--{qDOZ]tsJDfJ%&Fl!HS@!SldS/s+Kg/D$Yuk)kq-*qDdu}fZUHa@');
define('SECURE_AUTH_KEY', '^@E*VXkXvdIMyy@$IGVupzmY|WaepbApK>fkVGft%Gf;GeF_@Pn&*o}q+aAb^VT@INmZZrzOvx}-)$S%!H%W/FnMj=EuYv$e>(mpmdpHN+>a&=<apQBMix{%Pl;zoF*d');
define('LOGGED_IN_KEY', '$gWf_;eZ(!fbljQk&-Va{_!dK-BhN<WR<GP&|V<>|/DDFhXHb/-/Sk^ulnzScvQn^/t<_nzDcWku)zEJn@hmE&V<[DOdxz!qi/_DF=UDDYl])N-LpcYfLh[n%ngve[<p');
define('NONCE_KEY', 'j?eXqXaMYyPDjTo{KU!AKi=Zv*Ivq[eba<O?)O-gyqFpYO<kI+Q_y%fBaXi/S!cjPc(eCN{}[pAXaiB@L@zo&xoy/|NnEz*SqjteFbRgld-)?w?d^[$*!CtuxuDrF[-G');
define('AUTH_SALT', 'vP%w{IFF=+*MKb_eC/E|Le^sielXmP[_&AIlk*%]v??Wsn/t{+keA%)jPWUP!bYM^YTVYW!;O]fth?qgXsFujEvza)i<k>YlZLT(AaO=sjxw^bcWB}xnW]{&fR$_d@IS');
define('SECURE_AUTH_SALT', 'q}b(;!EKH?A>|Zh%Blv=mInkMxjDl>%<T}<)-P=rS+Gh{qR(|T-[VSbjnl;t$E&@@ZC|r?T_vlS?+km-GoRFHbQ}VA>(EBksHaTRSjyubV?hNsUelU|@J{IhKHyOCvK^');
define('LOGGED_IN_SALT', ';gTXX}g!IrZTsggmB=SA=Wue=PjsD]gV;^tyx}ESRHD>Dmf]]MyL*UpTR]gt]TRzcG_L+xsUgNv$fRmur^uJ^dwwXtAM+eMe^aO=vfeJiqXNttRIG>GdkKBx;%]ys=nr');
define('NONCE_SALT', 'WJOr(w+!)CfGphB!*U]>%VaS+k/;X^iartcwcWZWZulTdwsk^KfW**Eqi/P$fl;>(G|itBlN!pVz+hWM]sjZ[V$b]TJw?/tpjX@EdGXI(Yw!hfVSvAvXj(|aBt/loORZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_kqut_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
