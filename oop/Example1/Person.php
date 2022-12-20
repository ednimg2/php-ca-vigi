<?php

class Person
{
    private const DRINKING_AGE = 21;

    //Properties
    private string $name;
    private int $age;
    private string $eyeColor;

    //Methods
    public function say(): void
    {
        echo 'My name is ' . $this->name . ' My eyes color is '. $this->eyeColor;
        if ($this->age >= self::DRINKING_AGE) {
            $this->drink();
        }
    }

    private function drink(): void
    {
        echo ' I drink beer';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEyeColor(): string
    {
        return $this->eyeColor;
    }

    public function setEyeColor(string $eyeColor): void
    {
        $this->eyeColor = $eyeColor;
    }

    public function getData(): array
    {
        return [
            'name' => $this->name,
            'eyeColor' => $this->eyeColor,
            'age' => $this->age,
        ];
    }
}