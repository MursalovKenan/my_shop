<?php

if (PHP_MAJOR_VERSION < 8) {
    die('You need php version 8 or higher');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';
new \myshop\App();
debug(\myshop\Router::getRoutes());
