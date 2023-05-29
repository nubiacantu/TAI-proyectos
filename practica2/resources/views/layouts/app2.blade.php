<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite ('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-pink-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-r-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="text-white hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >Inicio</a>
              <a href="/alumnos" class="text-white hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Alumnos</a>
              <a href="/curriculum" class="text-white hover:bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Curriculum</a>
            </div>
          </div>
        </div>
        
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="inline-flex items-center justify-center rounded-md bg-pink-900 p-2 text-white hover:bg-pink-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="text-white hover:bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Inicio</a>
        <a href="/alumnos" class="text-white hover:bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Alumnos</a>
        <a href="/curriculum" class="text-white hover:bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Curriculum</a>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 title">
      <h2 class="text-3xl font-bold tracking-tight text-primary">@yield('titulo')</h2>
    </div>
  </header>
  <main class="bg-pink-100">
    @yield('contenido')
  </main>
  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>


</html>