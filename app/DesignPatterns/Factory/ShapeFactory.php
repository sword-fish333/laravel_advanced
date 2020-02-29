<?php


namespace App\DesignPatterns\Factory;


class ShapeFactory
{
 public function create($type){
     if($type==='rectangle'){
         return new Rectangle();
     }else{
         throw new \Exception('No valid type was provided!');
     }
 }
}
