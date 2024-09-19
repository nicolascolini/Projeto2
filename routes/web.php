<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/contato', action: function () {
    return view('contato');
});

Route::get('/historia', action: function () {
    return view('historia');
});