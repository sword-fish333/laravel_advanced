<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 10:25 AM
 */

namespace App\DesignPatterns\Strategy;


class ValidationStrategy
{
    protected $validation;

    function __construct(ValidationInterface $validation)
    {
        $this->validation=$validation;
    }

    public function validate():string{

        return $this->validation->validate();
    }

}