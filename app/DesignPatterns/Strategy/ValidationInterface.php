<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/18/20
 * Time: 10:08 AM
 */
namespace  App\DesignPatterns\Strategy;
interface ValidationInterface
{
        public function __construct(string $value, string  $name);
        public function validate();
}