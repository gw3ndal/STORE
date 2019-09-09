<?php

define("CONFIG_PATH", dirname(__FILE__)); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2\app\config
define("APP_PATH", dirname(CONFIG_PATH)); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2\app
define("MVC_PATH", dirname(APP_PATH)); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2
define("VIEWS_PATH", realpath(APP_PATH . '/views')); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2\app\views
define("MODELS_PATH", realpath(APP_PATH . '/models/')); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2\app\models
define("CONTROLLERS_PATH", realpath(APP_PATH . '/controllers')); // C:\wamp64\www\STORE\STORE-APP\mvc_bo2\app\controllers
define("SRC_PATH", VIEWS_PATH . '/layout');
define("ASSETS_PATH", APP_PATH . '/public/assets');

// * Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$public_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_PUBLIC", $public_root); // /store/STORE-APP/mvc_bo2/public

// * Can dynamically find everything in URL up to "/mvc-bo"
$mvc_bo = strpos($_SERVER['SCRIPT_NAME'], '/mvc_bo2') + 8;
$mvc_root = substr($_SERVER['SCRIPT_NAME'], 0, $mvc_bo);
define("WWW_MVC", $mvc_root);
require_once 'functions.php';