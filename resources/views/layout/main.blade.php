<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/jquery3.5.1.js"></script>
        <script src="/js/js.min.js"></script>

        <title>@yield('title')</title>

       
     
    </head>
    <body>

       <header>
       <div class="navbar navbar-expand-lg navbar-light">

<div class="collapse navbar-collapse" id="navbar">

<a href="/" class="navbar-brand">MM Events</a>
<ul class="navbar-nav">
    <li class="nav-item">
        <a href="/" class="nav-link">Eventos</a>
    </li>
    <li class="nav-item">
        <a href="/events/create" class="nav-link">Criar Eventos</a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">Entrar</a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">Cadastrar</a>
    </li>
</ul>
</div>
</div>
       </header>
        @yield('content')


        <footer>
            MM Events &copy; 2022
        </footer>
    </body>
</html>
