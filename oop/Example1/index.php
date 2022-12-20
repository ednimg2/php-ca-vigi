<?php

include_once 'Person.php';

$person1 = new Person();
$person1->name = 'Inga';
$person1->age = 28;
$person1->eyeColor = 'blue';

/*$person2 = new Person();
$person2->name = 'Tadas';

$person3 = new Person();
$person3->name = 'Valdas';*/

//echo $person1->name;

/*echo $person2->name;

echo $person3->name;*/

if ($person1 instanceof Person) {
    $person1->say();
    $person1->run();
}