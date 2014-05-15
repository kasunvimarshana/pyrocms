<?php
// Errors on full!
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
require __DIR__.'/../../system/vendor/autoload.php';

if (! isset($_SERVER['PYRO_WEB_HOST'])) {
    throw new Exception('Missing PYRO_WEB_HOST env variable!');
}
if (! isset($_SERVER['PYRO_DB_HOST'])) {
    throw new Exception('Missing PYRO_DB_HOST env variable!');
}

define('PYRO_WEB_HOST', $_SERVER['PYRO_WEB_HOST']);

define('PYRO_DB_DRIVER', isset($_SERVER['PYRO_DB_DRIVER']) ? $_SERVER['PYRO_DB_DRIVER'] : 'sqlite');
define('PYRO_DB_HOST', $_SERVER['PYRO_DB_HOST']); // Optional. required for MySQL / PGSQL
define('PYRO_DB_LOCATION', ! empty($_SERVER['PYRO_DB_LOCATION']) ? $_SERVER['PYRO_DB_LOCATION'] : realpath(__DIR__.'/../../build/test.sqlite'));
define('PYRO_DB_PORT', isset($_SERVER['PYRO_DB_PORT']) ? $_SERVER['PYRO_DB_PORT'] : '3306');
define('PYRO_DB_NAME', isset($_SERVER['PYRO_DB_NAME']) ? $_SERVER['PYRO_DB_NAME'] : 'pyrocms');
define('PYRO_DB_USER', isset($_SERVER['PYRO_DB_USER']) ? $_SERVER['PYRO_DB_USER'] : 'pyrocms');
define('PYRO_DB_PASS', isset($_SERVER['PYRO_DB_PASS']) ? $_SERVER['PYRO_DB_PASS'] : '');
define('PYRO_DB_CREATE', isset($_SERVER['PYRO_DB_CREATE']) ? (string) $_SERVER['PYRO_DB_CREATE'] : '0');
