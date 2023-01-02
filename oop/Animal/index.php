<?php

class Dog implements Communicative
{
    public function makeSound(): string
    {
        return 'woof woof';
    }
}

class Cat implements Communicative
{
    public function makeSound(): string
    {
        return 'Meow meow';
    }
}

class Duck implements Communicative
{
    public function makeSound(): string
    {
        return 'Quack quack';
    }
}

class Fox implements Communicative
{
    public function makeSound(): string
    {
        return 'fox fox';
    }
}

class Communication
{
    public function communicate(Communicative $animal): string
    {
        return $animal->makeSound();
    }
}

interface Communicative
{
    public function makeSound(): string;
}

$communication = new Communication();

echo $communication->communicate(new Fox());

/*$dog = new Dog();
$cat = new Cat();

echo $dog->bark();
echo $cat->meow();*/