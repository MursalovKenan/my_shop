<?php

namespace myshop;

trait TSingleyon
{
    private static ?self $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        return static::$instance ?? static::$instance = new static();
    }

}