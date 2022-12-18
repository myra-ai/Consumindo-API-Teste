<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


use App\Http\Controllers\apiController;
use App\Http\Controllers\ListarIDController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// $api = Http::withToken('9dc19260-ff58-4cf2-a5f4-e2f297595fab')->get('https://assembleia.api.pandora.com.br/eventos/7747/votante');

// echo $api;


Route::get('/', function () {
    $api = Http::withToken('9dc19260-ff58-4cf2-a5f4-e2f297595fab')->get('https://assembleia.api.pandora.com.br/eventos/7747/votante');
    $apiArray = $api->json();
    // dd($apiArray);
    return view('api', ['apiArray'=> $apiArray]);
});

// Route::get('/{id}', function ($id) {
      
//       $api = Http::withToken('9dc19260-ff58-4cf2-a5f4-e2f297595fab')->get('https://assembleia.api.pandora.com.br/eventos/7747/votante/5444527');
//       $apiArray = $api->json();
//       // dd($apiArray['id']);
//       return view('id', ['apiArray'=> $apiArray]);
//   });

//Route::get('/{id}', 'ListarIDController@listandoID')->name('dashboard');
Route::get('/{id}', 'App\Http\Controllers\ListarIDController@listandoID');


// Route::get('/api-example',  \App\Http\Controllers\apiController::class, function( ){
//       return view('api');

// });
