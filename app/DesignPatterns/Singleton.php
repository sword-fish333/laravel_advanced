<?php


namespace App\DesignPatterns;


class Singleton{

    public static $instance;
    private $name='singleton';
    public static function getInstance(){
        if(!isset(Singleton::$instance))
            return Singleton::$instance = new Singleton();

            return Singleton::$instance;

    }
 private   function __construct()
    {
//        PRIVATE CONSTRUCTOR!
    }

    public function query(){
        return 'SELECT * FROM some_table';
    }
}