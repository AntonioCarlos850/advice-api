<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdviceController extends Controller
{
    public function __invoke()
    {
        $response = Http::get("https://api.adviceslip.com/advice")->object();

        return view("index", [
            "advice" => $response->slip->advice
        ]);
    }
}
