<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'Kleaner');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'UvB09z2~i1c09:G{3S^ }0-W]mB,DK.=w< ou#w!j>+jv}e`neq]=/zPO~yk8eH`');
define('SECURE_AUTH_KEY', 'DI<9gM05t)iy;/sdoxXf}GI)3qZm%ncA>ri(?n~[XD*<gCK_&oDe.i`$l*IX*tPh');
define('LOGGED_IN_KEY', 'sCdE`2E&c=s3373D+V,6x@LF+d3nvH|d3-f$`TyO6RKxmImmtwfIT``VFoapd8Y/');
define('NONCE_KEY', 'Qq*x1H(MTx=z =;pauQLouwfvPAcVE*NhBFHjqe4En2kE,O sGNS$sypGU_?%y$[');
define('AUTH_SALT', 'b5<P%GoUP!%hf55/aZp>7[Ia^hUJ`}XbB3%lbBk{j?YuY(t[DOz17?;@34%n};CT');
define('SECURE_AUTH_SALT', '-o~{Kh|S%LD w#_.i5lP[r&OG~&!L8$$*L^(h,VNF.`,SDiPrFQ.64O?[_t9l(^$');
define('LOGGED_IN_SALT', 'aB!}$u7(9J-T/4y=<973j 3g1}Rkt3.+_hBjLoZe2P~<_2>@:wboc4iTAHVw:sCq');
define('NONCE_SALT', '/*5F0JS+CY|z $K ;I`giH)~#}TW%mpV-5=ZQs5K&Y|obFtz%b?osQDRg$x.RCyz');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

