<?php

include_once 'Person.php';

$person1 = new Person();
$person1->setName('Inga');
$person1->setAge(20);
$person1->setEyeColor('blue');

$personData = $person1->getData();

//var_dump($personData);

echo 'Vardas: '. $personData['name'] . '<br>';
echo 'Akiu spalva: '. $personData['eyeColor'] . '<br>';

echo 'Vardas: '. $person1->getName() . '<br>';
echo 'Akiu spalva: '. $person1->getEyeColor() . '<br>';

//echo $person1->getName();

//$person1->say();

//echo Person::DRINKING_AGE;

//var_dump($person1);

/*$person2 = new Person();
$person2->name = 'Tadas';

$person3 = new Person();
$person3->name = 'Valdas';*/

//echo $person1->name;

/*echo $person2->name;

echo $person3->name;*/

/*if ($person1 instanceof Person) {
    $person1->say();
    $person1->run();
}*/