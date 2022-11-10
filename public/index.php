<?php
include_once(dirname(__FILE__, 2) . "/src/config/config.php");

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '') {
    $uri = '/home.php';
}

include_once(CONTROLLER_PATH . "/{$uri}");