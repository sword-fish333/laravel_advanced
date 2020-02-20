<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 2:51 PM
 */
namespace  App\DesignPatterns\DecoratorPattern;
class FileLogger implements LoggerInterface
{

    public function log($msg){
        echo "<p>log to a file $msg</p>";
    }

}