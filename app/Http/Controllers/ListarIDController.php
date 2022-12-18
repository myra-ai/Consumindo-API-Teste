<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ListarIDController extends Controller
{
    public function listandoID($id){
      $api = Http::withToken('9dc19260-ff58-4cf2-a5f4-e2f297595fab')->get('https://assembleia.api.pandora.com.br/eventos/7747/votante/'.$id);
      $apiArray = $api->json();
     
      return view('id', ['apiArray'=> $apiArray]);
    }
}
