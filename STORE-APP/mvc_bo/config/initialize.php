<?php

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("CONFIG_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(CONFIG_PATH));
define("VIEWS_PATH", PROJECT_PATH . '/view');
define("LAYOUT_PATH", VIEWS_PATH . '/layout');
define("ASSETS_PATH", PROJECT_PATH . '/public/assets');

// * Can dynamically find everything in URL up to "/view"
$view_end = strpos($_SERVER['SCRIPT_NAME'], '/view') + 5;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $view_end);
define("WWW_ROOT", $doc_root);

// * Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$public_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_PUBLIC", $public_root);

// * Can dynamically find everything in URL up to "/mvc-bo"
$mvc_bo = strpos($_SERVER['SCRIPT_NAME'], '/mvc_bo') + 7;
$mvc_root = substr($_SERVER['SCRIPT_NAME'], 0, $mvc_bo);
define("WWW_MVC", $mvc_root);

require_once 'functions.php';