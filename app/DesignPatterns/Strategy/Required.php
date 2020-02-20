<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 10:10 AM
 */

namespace App\DesignPatterns\Strategy;


class Required implements ValidationInterface
{
    protected  $value,$name;
    public function __construct(string $value,string $name)
    {
        $this->value=$value;
        $this->name=$name;
    }

    public function validate(){
        if(strlen($this->value)===0)
            return "$this->name is required!";

        return '';
    }
}