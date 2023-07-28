<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForecastingController extends Controller
{
    public function prediksi(){
        return view('forecasting.prediksi');
    }
}
