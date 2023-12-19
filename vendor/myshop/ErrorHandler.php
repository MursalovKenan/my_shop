<?php

namespace myshop;

class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        }else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler(\Exception $e)
    {
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logError($message, $file, $line)
    {
        file_put_contents(LOGS . '/errors.log',
        '[' , date('Y-m-d H:i:s') . "] error message: {$message} | error file: {$file} | error line: {$line}\n========================\n");
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $response = 500)
    {
        if ($response == 0) $response = 404;
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require_once WWW . '/errors/404.php';
        }
        if (DEBUG) {
            require_once WWW . '/errors/development.php';
        }else {
            require_once WWW . '/errors/production.php';
        }
        die();
    }

}