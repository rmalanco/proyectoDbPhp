<?php
// Aquí se definen las constantes de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
// Constantes de la base de datos
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_CHARSET', $_ENV['DB_CHARSET']);

// Constantes de errores de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
define('ERROR_DB_CONNECTION', 'Error al conectar con la base de datos: ');
define('ERROR_CONTROLLER_NOT_FOUND', 'Controlador no encontrado');
define('ERROR_ACTION_NOT_FOUND', 'Acción no encontrada');


// Constantes de rutas de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
define('BASE_URL', 'http://localhost/proyecto-db-php/');


// Constantes de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
define('APP_NAME', 'Proyecto DB PHP');
define('APP_URL', 'http://localhost/proyecto-db-php/');
define('APP_LANG', 'es');
define('APP_TIMEZONE', 'Europe/Madrid');
define('APP_KEY', 'proyectodbphp');
define('APP_DEBUG', true);
define('APP_VERSION', '1.0.0');
define('APP_AUTHOR', 'Javier García');
define('APP_AUTHOR_EMAIL', '');
define('APP_AUTHOR_WEB', '');
define('APP_COMPANY', 'Proyecto DB PHP');
define('APP_COMPANY_WEB', 'http://localhost/proyecto-db-php/');
define('APP_COMPANY_EMAIL', '');
define('APP_COMPANY_PHONE', '');
define('APP_COMPANY_ADDRESS', '');
define('APP_COMPANY_CITY', '');
define('APP_COMPANY_ZIPCODE', '');
define('APP_COMPANY_COUNTRY', '');
define('APP_COMPANY_LOGO', 'logo.png');
define('APP_COMPANY_LOGO_ALT', 'Proyecto DB PHP');
define('APP_COMPANY_SLOGAN', 'Proyecto DB PHP');
define('APP_COMPANY_DESCRIPTION', 'Proyecto DB PHP');
define('APP_COMPANY_KEYWORDS', 'Proyecto DB PHP');