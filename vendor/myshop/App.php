<?php

namespace myshop;

class App
{
    public static $app;

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['REQUEST_URI']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
    }

    protected function getParams(): void
    {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $name => $value) {
                self::$app->setProperty($name, $value);
            }
        }
    }

}