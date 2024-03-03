<?php

namespace App\Http\Controllers;

use App\Services\Response\ResponseService;
use Illuminate\Support\Facades\Http;

class ExternalApiController extends Controller
{
    public function weather()
    {
        $response = Http::get("https://api.weatherapi.com/v1/current.json?key=" . env("APP_WEATHER_KEY", "5670c884752a4de1b56173317231111") . "&q=Istaravshan&aqi=no");
        return ResponseService::sendJsonResponse(true, 200, [], [
            "weather" => $response->json()
        ]);
    }
}
