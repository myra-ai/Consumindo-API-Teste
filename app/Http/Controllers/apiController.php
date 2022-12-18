<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    public function __invoke()
    {
       return Http::withHeaders([
        'Authorization' => '',
       ])->get('https://assembleia.api.pandora.com.br/eventos/7747/votante')->json();
    }
}
