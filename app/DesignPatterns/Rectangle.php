<?php


namespace App\DesignPatterns;

class Rectangle implements Shape {


private $position;

function __construct($position)
{
    $this->position=$position;
}

    public function draw()
    {
        // TODO: Implement draw() method.

        echo 'Drawing a rectangle!';
    }

}

interface  Shape{

    public function draw();

}
class Postion{};
