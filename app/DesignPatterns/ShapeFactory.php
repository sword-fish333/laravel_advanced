<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/16/20
 * Time: 9:29 PM
 */

namespace App\DesignPatterns;


class ShapeFactory{
    function create($type)
    {
        if($type==='rectangle'){
            return new Rectangle(new Postion());
        }

    }
}