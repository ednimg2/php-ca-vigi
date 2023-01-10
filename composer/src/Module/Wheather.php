<?php

namespace App\Vigi\Module;

use Cmfcmf\OpenWeatherMap;

class Wheather
{
    private string $city;
    private string $language;
    private string $unit = 'metric';
    private OpenWeatherMap $weather;

    public function __construct(string $city, string $language, OpenWeatherMap $weather)
    {
        $this->weather = $weather;
    }
    public function getTemperature(): string
    {
        //return $this->weather
    }

    private function getWeather()
    {
        return $this->weather->getWeather($);
    }
}