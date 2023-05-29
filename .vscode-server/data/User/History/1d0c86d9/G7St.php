<!-- crear una directiva para incluir la navegacion-->
@extends('layouts.app')
<!-- crear el contenido que se envia al contenedor(yield)-->
@section('titulo')
    Registrate Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <!-- insertar imagen utilizando "assert" (acceder a carpeta publica)-->
            <img src="{[assert('img/registrar.jpg')]}" alt="Imagen registro de usuarios">
        </div>
    </div>
@endsection