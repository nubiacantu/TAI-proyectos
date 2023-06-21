<!-- crear una directiva para incluir la navegacion-->
@extends('layouts.app')
<!-- crear el contenido que se envia al contenedor(yield)-->
@section('titulo')
    Detalles de la publicacion
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <!-- Imagen de post  -->
    <div class="md:w-4/12 p-5">
        <img src="{{ asset('uploads/'.$post->imagen) }}" alt="Imagen registro de usuarios" class="w-full h-auto">
    </div>
    
    <!-- Detalles de imagen de post -->
    <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl h-96 md:h-96 min-h-[0] md:min-h-[0]  ">
        <a href="{{route('post-index', auth()->user()->username) }}" class="flex items-center text-gray-500 text-sm mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1">
                <path d="M15 18l-6-6 6-6" />
            </svg>
            Volver
        </a>
        <h1 class="text-5xl font-bold mb-7 text-green-700 text-center">{{ $post->titulo }}</h1>
        <div class="flex justify-end w-full mb-7">
                <p class="text-gray-500 text-base mb-1 mr-2">Publicado por: {{ $username }}, </p>
                <p class="text-gray-500 text-base">{{ $post->created_at->diffforHumans() }}</p>
        </div>
        <p class="text-gray-700 text-2xl text-center">{{ $post->descripcion }}</p>
    </div>
</div>


@endsection
