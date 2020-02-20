<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 10:10 AM
 */

namespace App\DesignPatterns\Strategy;


class Email implements ValidationInterface
{
    protected  $value,$name;
    public function __construct(string $value,string $name)
    {
        $this->value=$value;
        $this->name=$name;
    }

    public function validate(){
        if(!filter_var($this->value,FILTER_VALIDATE_EMAIL))
            return "$this->name  field is not a valid email!";

        return '';
    }
}