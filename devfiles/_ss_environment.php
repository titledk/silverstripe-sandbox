<?php
//ini_set('display_errors',true);

define('SS_ENVIRONMENT_TYPE', 'dev');
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', 'root');
define('SS_DATABASE_CHOOSE_NAME', true);

define('SITE_PROFILE', 'local');

global $database;
$database = 'sandbox';
 
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');


global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/private/var/git-repos/silverstripe-sandbox/public'] = 'http://sandbox.mamp.localhost:8888';
