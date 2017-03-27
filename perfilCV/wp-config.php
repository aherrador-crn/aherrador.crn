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
define('DB_NAME', 'perfilCV');

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
define('AUTH_KEY', 'mVMBqjMOQOh-%0Lj*9B7:QKn^}s!~0Y<Cj;|xJ<{=Y;5DaW~bZ)tC=v/%l+k}b c');
define('SECURE_AUTH_KEY', 'M#Thd6O# #r;Lh}f:n$i^swquSRB7DH+>VkC5bUrOg14CwlNV;z~E[u9F@Q_ij-x');
define('LOGGED_IN_KEY', '>q?+n~%r*g;u_i{=0WjiI)b&H>e)[h2-bT~e(RsiosWpdd;g<@mUBa;r^ML/py! ');
define('NONCE_KEY', 'm|~E^Ua3zn2=Ii=@jz[?c*9Hj#)@LsqyZNyLms&}hWrEJ~<.`Kp%Y7@?BG?J~?<r');
define('AUTH_SALT', '.!)q KJFM1[Jz5o{| [E]R0#gUk]$QRwrX=h>?/O90P9N[YN<a?m0;nG8W-(3sI0');
define('SECURE_AUTH_SALT', 'K08MC@ecI[.:rfNJ ([kH}Gk]>Q<YGmNXsG@=o}:{x4FIDnxgD;JIZZ8jw_;7{~z');
define('LOGGED_IN_SALT', 'K*qcsM {5DAzaq1!8dEPO5K%L%rYYjDL!2(^)-> N]!bANyVe,esZ1bZ}<r^FdF$');
define('NONCE_SALT', 'QU+QYy/96?zQ4 &pJ.Qjbh}d&mA)rS3:|9bRo6z9c<G]~8^$XKf/><C}qx5aO*2E');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

