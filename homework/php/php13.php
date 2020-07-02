<?php
//php13

// - Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir metodą pasisveikinimui.
// - Sukurk du žmones su skirtingais duomenimis. 
// - Išvesk šiuos duomenis naršyklėje.
// - Patalpinkite parašytą kodą į GIT.

class Human
{
    public $name = 'unknown';
    public $surname = 'unknown';

    public function getName()
    {
        return $this -> name;
    }
    public function sayHello()
    {
        echo 'hello ' . $this -> name . '!';
    }
}

$human1 = new Human();
$human1->name = "rokas";
$human1->surname = "lokys";
echo $human1 -> sayHello();
echo $human1 -> getName();

$human2 = new Human();
$human2->name = "tomas";
$human2->surname = "zasys";
echo $human2 -> sayHello();
echo $human2 -> getName();


?>