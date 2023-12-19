<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/myshop');
define("HELPERS", ROOT . '/vendor/myshop/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LATOUT", 'myshop');
define("PATH", 'http://my-shop.local/');
define("ADMIN", 'http://my-shop.local/admin');
define("NO_IMAGE", 'uploads/no-image.jpg');

require_once ROOT . '/vendor/autoload.php';


