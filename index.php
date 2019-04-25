<?php 
define('BASE_PATH', __DIR__);
define('BASE_URL', 'http://localhost/web');
define('IMG_PATH', BASE_URL . '/public/images/');
define('CSS_PATH',BASE_URL.'/public/css/');
define('JS_PATH',BASE_URL.'/public/js/');
define('FONTS_PATH',BASE_URL.'/public/fonts/');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$lib= BASE_PATH.'/library/autoload.php';

include $lib;