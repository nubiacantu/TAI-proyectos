<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //crear nuestro primer metodo del controlador
    public function index() {
        return view('auth.register');
    }
}
