<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WeatherController extends Controller
{

    private $apiURL = 'https://api.weather.yandex.ru/v1/forecast';
    private $key = '60112d2e-74c8-419e-b929-10bc13ac4eac';
    private $lat = '53.273712';
    private $lon = '34.343395';

    /**
     * Документация по API:
     * @link https://yandex.ru/dev/weather/doc/dg/concepts/forecast-test-docpage/
    */
    public function show()
    {
        $weather = 1;
        $headers = ['X-Yandex-API-Key' => $this->key];
        $client = new Client(['headers' => $headers]);
        $params = '?lat='.$this->lat.'&lon='.$this->lon;
        $response = $client->get($this->apiURL.$params);
        $data = json_decode($response->getBody());
        dd($data->fact->temp);
        return view('weather', compact('weather'));
    }

}