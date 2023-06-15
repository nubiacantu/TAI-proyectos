<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class PostController extends Controller
{

    //constructor para proteccion de la url 'dashboard'
    //el constructor es lo que se ejectira cuando instancias un controlador

    public function __construct(){
        //protegemos la url
        //al metodo index con el constructor le pasamos el parametro de autenticacion
        $this->middleware('auth');
    }
    public function index() {
        return view('dashboard');
    }
    //cerando etidi create para formulario de publucaciones
    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        //validaciones del formulario de registros
        $this->validate($request,[
            'titulo'=>'required', 
            'descripcion'=>'required'
        ]);

        //Invocar el modelo User para crear el registro
        posts::create([
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion

            
        ]);

        //redireccionamiento
        return redirect()->route('post.create');

        
    }
}


