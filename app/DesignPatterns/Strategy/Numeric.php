<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 10:10 AM
 */

namespace App\DesignPatterns\Strategy;


class Numeric implements ValidationInterface
{
    protected  $value,$name;
    public function __construct(string $value,string $name)
    {
        $this->value=$value;
        $this->name=$name;
    }

    public function validate(){
        if(!is_numeric($this->value))
            return "$this->name  field is not a valid number!";

        return '';
    }
}