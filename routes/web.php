<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('galeria',[TesteController::class, 'galeria']);
Route::get('home',[TesteController::class, 'home']);
Route::get('contato',[TesteController::class, 'contato']);
Route::get('historia',[TesteController::class, 'historia']);
Route::get('teste',[TesteController::class, 'testar']);