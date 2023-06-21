<?php

namespace App\Http\Controllers;
use App\Models\comentarios;
use App\Models\User;
use App\Models\posts;

use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function store(Request $request, User $user, posts $post){

        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        comentarios::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'comentario' => $request->comentario,
        ]);

        

        // Imprimir un mensaje
        return back()->with('mensaje', 'Comentario publicado correctamente');
    }
}
