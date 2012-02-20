<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('ROOT', '/var/www/localhost/ac/activecollab');
define('PUBLIC_FOLDER_NAME', 'public');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '8i8o11ag');
define('DB_NAME', 'pmanager');
define('DB_CAN_TRANSACT', true);
define('TABLE_PREFIX', 'acx_');

define('ROOT_URL', 'http://localhost/ac');
define('URL_BASE', ROOT_URL . '/');
define('ASSETS_URL', ROOT_URL . '/public/assets');
define('COOKIE_DOMAIN', '');

//define('PATH_INFO_THROUGH_QUERY_STRING', true);
define('FORCE_QUERY_STRING', true);
define('LOCALIZATION_ENABLED', true);
define('ADMIN_EMAIL', 'info@nopticon.com');
define('DEBUG', 2);
define('API_STATUS', 1);
define('PROTECT_SCHEDULED_TASKS', true);
define('DB_CHARSET', 'utf8');

define('CHARTS_OUTPUT_IMG_DIR', ROOT . '/../images/cache');
define('CHARTS_OUTPUT_IMG_URL', ROOT_URL . '/images/cache');

require_once 'defaults.php';

?>
