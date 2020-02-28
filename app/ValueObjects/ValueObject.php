<?php

namespace App\ValueObjects;


use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;


class ValueObject{

   public function register(string $name,Age $age){


       echo 'Registration successful';
   }
}
