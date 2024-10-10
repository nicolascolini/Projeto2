<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;


Route::get('/', function () {
    return view('welcome');
});

Route::get('galeria',[TesteController::class, 'galeria']);
Route::get('home',[TesteController::class, 'home']);
Route::get('contato',[TesteController::class, 'contato']);
Route::get('historia',[TesteController::class, 'historia']);
Route::get('teste',[TesteController::class, 'testar']);
Route::get('cadastrarCliente', [Cliente::class, 'create']);
Route::post('cadastrarCliente', [Cliente::class, 'store']);