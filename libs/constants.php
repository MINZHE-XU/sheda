<?php
/*
 * @author Mazin
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/simple-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost:8889');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', 'sheda');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Simple Website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>