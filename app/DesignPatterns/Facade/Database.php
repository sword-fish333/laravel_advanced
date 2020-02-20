<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/19/20
 * Time: 6:15 PM
 */

namespace  App\DesignPatterns\Facade;
class Database
{

    public function getData($id){
        echo  "get data for $id".'<br>';
    }
}