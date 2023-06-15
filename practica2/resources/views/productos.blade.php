<!-- crear una directiva para incluir la navegacion-->
@extends('layouts.app')
<!-- crear el contenido que se envia al contenedor(yield)-->
@section('titulo')
    Productos
@endsection

@section('contenido')
   
<!-- Tarjeta -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
    <div class="mx-auto flex max-w-80% flex-col shadow-lg rounded-xl p-16 bg-white">
        <!-- agregar productos en modal -->
        
        <!-- Modal toggle -->
        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="ml-auto bg-green-500 hover:bg-emerald-700 transition-colors cursor-pointer font-bold p-3 text-white rounded-lg">
    Agregar Producto
</button>
        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Agregar Producto</h3>
                        
                        <form class="space-y-6" action="{{route('product-list')}}" method="POST" novalidate>
                            @csrf <!-- para que detecte token de envio seguro-->
                            <div>
                                <label for="desc_corta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción corta</label>
                                <input type="text" name="desc_corta" id="desc_corta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('desc_corta') border-red-500 @enderror" value="{{old('desc_corta')}}" placeholder="Ingrese la descripción corta" required>
                                <!--directiva para mostrar mensaje de error-->
                                @error ('desc_corta')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="desc_larga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción larga</label>
                                <textarea type="text" name="desc_larga" id="desc_larga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('desc_larga') border-red-500 @enderror" value="{{old('desc_larga')}}" placeholder="Ingrese la descripción larga" required></textarea>
                                @error ('desc_larga')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                        {{$message}}
                                    </p>
                                @enderror
                            </div>

                            <div class="flex">
                                <div class="mr-2">
                                    <label for="precio_venta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de Venta (M.N.)</label>
                                    <input type="text" name="precio_venta" id="precio_venta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('precio_venta') border-red-500 @enderror" value="{{old('precio_venta')}}" placeholder="Ej. 100.00" required>
                                    @error ('precio_venta')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{$message}}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="precio_compra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio de Compra (M.N.)</label>
                                    <input type="text" name="precio_compra" id="precio_compra" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('precio_compra') border-red-500 @enderror" value="{{old('precio_compra')}}" placeholder="Ej. 80.00" required>
                                    @error ('precio_compra')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{$message}}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex">
                                <div class="mr-2">
                                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                                    <input type="text" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('stock') border-red-500 @enderror" value="{{old('stock')}}" placeholder="Ej. 20" required>
                                    @error ('stock')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{$message}}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso (en Kg)</label>
                                    <input type="text" name="peso" id="peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white  @error ('peso') border-red-500 @enderror" value="{{old('peso')}}" placeholder="Ej. 32" required>
                                    @error ('peso')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{$message}}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div> 

        <!--tabla de productos -->
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Descripción corta</th>
                    <th class="px-4 py-2">Descripción larga</th>
                    <th class="px-4 py-2">Precio de Venta</th>
                    <th class="px-4 py-2">Precio de Compra</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Peso</th>
                    <th class="px-4 py-2">Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto->id }}</td>
                        <td class="border px-4 py-2">{{ $producto->descripcion_corta }}</td>
                        <td class="border px-4 py-2">{{ $producto->descripcion_larga }}</td>
                        <td class="border px-4 py-2">${{ $producto->precio_venta }}</td>
                        <td class="border px-4 py-2">${{ $producto->precio_compra }}</td>
                        <td class="border px-4 py-2">{{ $producto->stock }}</td>
                        <td class="border px-4 py-2">{{ $producto->peso }} Kg</td>
                        <td class="border px-4 py-2">{{ $producto->fecha_registro }}</td>
                         <!-- boton de eliminar -->
                         <td class=" px-4 py-2">
                            <form action="{{ route('product-delete', $producto->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="inline-block px-4 py-2 rounded-xl font-bold text-white bg-green-500 hover:bg-emerald-700 transition-colors">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
      
    
    

@endsection
