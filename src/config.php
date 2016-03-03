<?php
define('ENV', 'development');
defined("ENV") || define("ENV", (getenv("ENV") ? getenv("ENV"):"production"));

define("PATHAPP", realpath(__DIR__ . "/../"));

define('PATHTEMPLATE', PATHAPP . '/src/template');
define('PATHPARTIAL', PATHAPP . '/src/partial');

ini_set("log_errors", "On");
ini_set("error_log", PATHAPP . "/log/error.log");

if(ENV === "development") {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', "Off");
}