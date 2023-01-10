<?php

namespace App\Vigi\Module;

class User
{
    public string $name = 'Mindaugas';
    private Wheather $userWeather;

    public function __construct(Wheather $userWeather)
    {
        $this->userWeather = $userWeather;
    }

    public function getUserWeatherTemperature(): string
    {
        return $this->userWeather->getTemperature();
    }
}