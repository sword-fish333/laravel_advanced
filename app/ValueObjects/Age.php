<?php


namespace App\ValueObjects;


use Symfony\Component\HttpFoundation\Response;

class Age{
    private $age;
    public function __construct($age)
    {
        if($age<0 || $age>120){
            abort(Response::HTTP_NOT_ACCEPTABLE,'Wrong age');
        }
        $this->age=$age;
    }

    public function increment(){
        $age=$this->age+1;
        return new self($age);
    }

    public function getAge(){
        return $this->age;
    }
}
