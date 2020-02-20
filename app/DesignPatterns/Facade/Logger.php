<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/19/20
 * Time: 6:16 PM
 */

namespace App\DesignPatterns\Facade;


class Logger
{
        public function log($msg){
            echo  $msg.'<br>';
        }
}