<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WeatherController extends Controller
{

    public function show()
    {
        //return "123";
        $weather = 1;
        return view('weather', compact('weather'));
    }

}