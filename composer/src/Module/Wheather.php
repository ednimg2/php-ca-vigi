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
        $this->city = $city;
        $this->language = $language;
        $this->weather = $weather;
    }
    public function getTemperature(): string
    {
        return $this->getWeather()->temperature;
    }

    public function getPressure(): string
    {
        return $this->getWeather()->pressure;
    }

    public function getFormattedWeather(): string
    {
        return '
            Temperatura: '. $this->getTemperature() . '<br>
            Slegis: '. $this->getPressure() .'<br>
        ';
    }

    private function getWeather(): OpenWeatherMap\CurrentWeather
    {
        return $this->weather->getWeather(
            $this->city,
            $this->unit,
            $this->language
        );
    }
}