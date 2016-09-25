<?php

class Singleton{

    private static $instance=null;

    private function  __construct()
    {
    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance=new Singleton();
        }
        return self::$instance;
    }

}

$singleton=Singleton::getInstance();


trait Singleton2
{

    protected static $instance;

    protected function __construct()
    {
    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

}