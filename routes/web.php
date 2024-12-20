<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;


Route::get('/', function () {
    return view('home');
});

Route::get('galeria',[TesteController::class, 'galeria']);
Route::get('home',[TesteController::class, 'home']);
Route::get('contato',[TesteController::class, 'contato']);
Route::get('historia',[TesteController::class, 'historia']);
Route::get('teste',[TesteController::class, 'testar']);
Route::get('cadastrarCliente', [Cliente::class, 'create']);
Route::post('cadastrarCliente', [Cliente::class, 'store']);
Route::get('listarCliente', [Cliente::class, 'index']);
Route::delete('deletarCliente/{id}', [Cliente::class, 'destroy']);
Route::get('/buscar-clientes', [Cliente::class, 'buscarClientes'])->name('buscar.clientes');
Route::get('editarCliente/{id}', [Cliente::class, 'edit']);
Route::put('editarCliente/{id}', [Cliente::class, 'update']);
