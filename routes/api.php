<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/clientes', [ClienteController:: class, 'index' ]);//Rota Principal
Route::post('/clientes', [ClienteController:: class, 'store' ]);// Envia para o Banco
Route::get('/clientes/{id}', [ClienteController:: class, 'show' ]);// Retornar

