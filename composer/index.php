<?php

use App\Vigi\Module\Wheather;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

require_once "vendor/autoload.php";

$httpRequestFactory = new RequestFactory();
$httpClient = GuzzleAdapter::createWithConfig([]);

/*try {
    $weather = $owm->getWeather('AAA', 'metric', 'lt');
    echo $weather->pressure;
} catch (OWMException $e) {
    echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
}*/

$weather = new Wheather(
    'Vilnius',
    'lt',
    new OpenWeatherMap('07ad4d4dc319f100446a76c023fd05ac', $httpClient, $httpRequestFactory)
);

echo $weather->getTemperature();