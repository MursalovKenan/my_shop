<?php

if (PHP_MAJOR_VERSION < 8) {
    die('You need php version 8 or higher');
}

require_once dirname(__DIR__) . '/config/init.php';
new \myshop\App();
//echo \myshop\App::$app->getProperty('pagination');
//var_dump(\myshop\App::$app->getProperties());
throw new Exception('some error happend');