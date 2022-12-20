<?php

class Person
{
    //Properties
    public string $name;
    public int $age;
    public string $eyeColor;

    //Methods
    public function say(): void
    {
        echo 'My name is ' . $this->name . ' My eyes color is '. $this->eyeColor;
    }

    public function run(): void
    {
        echo 'Running!!!';
    }
}