<!-- Extender el diseño de la aplicación principal -->
@extends('layouts.app')

<!-- Sección de contenido que se envía al contenedor (yield) -->
@section('contenido')

<!-- Imagen de portada -->


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel decorativo -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset ('img/c1.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset ('img/c2.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset ('img/c3.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
       
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
     </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Sección de tarjetas -->
<div class="py-8">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
    <dl class="grid grid-cols-1 gap-x-2 gap-y-8 text-center lg:grid-cols-3">
      
      <!-- Tarjeta: Conecta y comparte -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4 shadow-lg rounded-xl p-16 bg-white hover:-translate-y-1 hover:scale-110 duration-300">
        <dt class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Simplifica tu proceso de ventas</dt>
        <dd class="text-base leading-7 text-gray-600">Gestiona tus tiendas y mantén un control preciso de tus productos en tiempo real con nuestro sistema de inventario para tiendas.</dd>
      </div>
      
      <!-- Tarjeta: Explora el código -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4 shadow-lg rounded-xl p-16 bg-white hover:-translate-y-1 hover:scale-110 duration-300">
        <dt class="text-base leading-7 text-gray-600">Administra, supervisa y optimiza tus existencias con nuestra solución de gestión de inventarios.</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Controla tu inventario de forma eficiente</dd>
      </div>
      
      <!-- Tarjeta: Inspírate y motívate -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4 shadow-lg rounded-xl p-16 bg-white hover:-translate-y-1 hover:scale-110 duration-300">
        <dt class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Optimiza tus operaciones comerciales</dt>
        <dd class="text-base leading-7 text-gray-600">Aumenta la productividad y reduce los costos al tener un inventario actualizado y una visión clara de tus productos en todas tus tiendas.</dd>
      </div>
    </dl>
  </div>
</div>

@endsection
