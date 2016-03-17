<?php

namespace App\Http\Controllers;

use Request;
use App\Weather;
use App\Http\Requests;

class WeatherController extends Controller
{
    public function index() {
        $weathers = Weather::all();

        return view('weather.view', compact('weathers'));
    }

    public function create() {
        return view('weather.create');
    }

    public function store() {
        $input = Request::all();

        Weather::create($input);

        return redirect(route('home.dashboard'));
    }
}
