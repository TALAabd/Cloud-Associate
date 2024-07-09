<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class QuoteController extends Controller
{
    public function show()
    {
        $response = Http::get('https://api.quotable.io/random');
        $quote = $response->json();
        return view('quote', ['quote' => $quote['content']]);
    }
}
