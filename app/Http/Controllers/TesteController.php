<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testar(){
        return view('teste');
    }

    public function galeria(){
        return view('galeria');
    } 

    public function home(){
    return view('home');
}

    public function historia(){
    return view('historia');

}

    public function contato(){
    return view('contato');

}

}