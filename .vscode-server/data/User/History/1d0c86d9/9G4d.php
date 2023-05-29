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
            <img src="{{assert ('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg"/>
                    
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="username" name="username" type="text" placeholder="Tu Username" class="border p-3 w-full rounded-lg"/>
                </div>
            </form>
        </div>
    </div>
@endsection