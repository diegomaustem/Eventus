<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS Aplicação -->
        <link rel="stylesheet" href="{{asset('/css/styles.css')}}"> 

        <!-- JS Aplicação -->
        <script src="{{asset('/js/scripts.js')}}"></script>

        <!-- JS Mensagens dentro da aplicação -->
        <script src="{{asset('/js/message.js')}}"></script>

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
                            <a href="/events/create" class="nav-link">Criar Evento</a>
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
        <main>
            @if(session('msg'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p class="msg"> {{ session('msg') }}</p>
            </div>
            @endif
            @yield('content')
      </main>
       <footer>
           <p>Eventus &copy; 2021</p>
       </footer>

       <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>

