<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/16/20
 * Time: 10:11 PM
 */

namespace App;


class PostCard
{

    public static function resolveFacade($name){
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return dd(self::resolveFacade('PostCard')->$method(...$arguments));
    }
}