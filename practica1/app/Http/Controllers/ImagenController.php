<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function store(Request $request){
        //identificar el archivo que se sube en dropzone
        $imagen=$request->file('file');

        //convertimos el arreglo input a formato json
        return response()->json(['imagen'=>$imagen->extension()]);
    }
}
