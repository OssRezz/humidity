<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\History;
use Illuminate\Support\Facades\Http;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "status" => 200,
            "message" => "Lista de ciudades",
            "data" => City::all(),
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city, History $history)
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city->name,
            'appid' => "cdb1bed5a1bedf53a5a4ae2de6b7b85b",
            "lang" => "es"
        ]);
        $humidity = json_decode($response->body());

        $history->city_id = $city->id;
        $history->humidity = $humidity->main->humidity;
        $history->icon = $humidity->weather[0]->icon;
        $history->description = $humidity->weather[0]->description;
        $history->save();

        $city->views = $city->views + 1;
        $city->update();

        return response()->json([
            "status" => 200,
            "message" => "Open weater API response",
            "data" =>  [$humidity]
        ]);
    }
}
