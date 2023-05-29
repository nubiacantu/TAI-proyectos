<!doctype html>
<html class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite ('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="h-full bg-teal-50">
        <!--ENCABEZADO DE LA PAGINA -->
        <header class="p-3 border-b bg-teal-800 text-white shadow ">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Devstagram
                </h1>
                
                
                
            </div>
        </header>
        <!--Contenido para cada una de las vistas-->

        <main class="bg-teal-50">
        @if(!empty(trim($__env->yieldContent('titulo'))))
            <h2 class="mt-10 font-black text-center text-3xl mb-10">
                        @yield('titulo')
                    </h2>
        @endif
            @yield('contenido')
        </main>

        <!--Pie de pagina -->
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Devstagram UPV - Todos los derechos reservados {{now()->year}}
        </footer>       
    </body>
</html>
