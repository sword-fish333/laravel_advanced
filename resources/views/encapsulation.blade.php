<?php

        class Person {
            public $name;
            function __construct($name)
            {
                $this->name=$name;
            }

            public function getName(){
                return $this->name;
            }

            private function nightmares(){
//                echo 'I have a lot of fear running in me!  I am '.$this->name;
        }

        }


        $method=new ReflectionMethod(Person::class,'nightmares');
        $method->setAccessible('public');

$dan=new Person('dan');
$method->invoke($dan);

?>

<html>
<br>
<form action="/encapsulation/save" method="post">
    @csrf
<input type="text" name="name">
    <button type="submit">Save</button>
</form>
</html>
