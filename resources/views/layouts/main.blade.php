<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS Aplicação -->
        <link rel="stylesheet" href="{{asset('/css/styles.css')}}"> 

        <!-- JS Aplicação -->
        <script src="{{asset('/js/scripts.js')}}"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

       <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="{{asset('img/logo.png')}}">
                    </a>
                    <ul class="navbar-nav">
                        <div class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </div>
                        <div class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </div>
                        <div class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </div>
                        <div class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </div>
                    </ul>
                </div>
            </nav>
       </header>

        @yield('content')
       <footer>
           <p>Eventus &copy; 2021</p>
       </footer>

       <script type = "module"src= "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
        <script nomodule  src= "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
