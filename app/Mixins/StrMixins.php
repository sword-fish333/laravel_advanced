<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/17/20
 * Time: 12:33 AM
 */
namespace App\Mixins;
class StrMixins
{

    public function partNumber(){
        return function ($part){
            return 'AB-'.substr($part,0,3).'-'.substr($part,3);
        };

    }

    public function prefix(){

        return function ($string,$prefix='121') {
            return $prefix . $string;
        };
    }
}