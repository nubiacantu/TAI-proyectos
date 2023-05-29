<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal - @yield('titulo')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!--Iconos -->
        <script src="https://kit.fontawesome.com/a8a964cfb5.js" crossorigin="anonymous"></script>
        <!--estilos personalizados-->
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
       
    </head>
    
    <header id="home">
        <nav id="home">
            <div class="nav-center">
                <div class="nav-header">
                </div>
                <div class="links-container">
                    <ul class="links">
                        <li>
                            <a href="/" class="scroll-link">Inicio</a>
                        </li>
                        <li>
                            <a href="/alumnos" class="scroll-link">Alumnos</a>
                        </li>
                        <li>
                            <a href="/curriculum" class="scroll-link">Curriculum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--inicio-->
        <section>
            @yield('banner')
        </section>
    
    </header>
    <body >
        <!--crer un contenedor dinamico para el titulo-->
        <!--yield es para crear un contenedor-->
        <div class="">
			<h2 class="m-3">@yield('titulo')</h2>
        </div>

        @yield('contenido')
        <br>
        <footer class="section">
            <p>
                Nubia Esmeralda Cantú Sánchez
                <span id="date"></span>. 2030210
            </p>
            <a href="#home" class="scroll-link top-link">
                <i class="fa-solid fa-laptop"></i>
            </a>
        </footer>
        
        <!-- Script necesario para el funcionamiento del collapse -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
        <script src="/js/pract3.js"></script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>
