<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans" rel="stylesheet">
    
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- CSS e JS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/logo.png" alt="Point Fair">
                </a>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/feiras/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
                </ul>
            </div>
            </nav>
        </header>

        @yield('content')
        <footer class="Rodape">
            <div class="container-rodape">
            <div class="sobre-nos">
              <h2>Sobre Nós</h2>
              <div class="linha-vertical"></div>
              <p>O nosso objetivo é divulgar e facilitar a comunicação entre feirantes e vendedores autônomos com o público.</p>
            </div>

            <div class="panellinks">
              <div class="links">
                  <div class="linksone">
                      <li><a href="aboutus.html"><ion-icon name="people-outline"></ion-icon></a></li>
                      <li><a href="duvidasFrequentes.html"><ion-icon name="help-outline"></ion-icon></a></li>  
                  </div>
                  <div class="linkstwo">
                      <li><a href="mailto: " target="_blank"><ion-icon name="mail-outline"></ion-icon></a></li>
                      <li><a href="/"><ion-icon name="home-outline"></ion-icon></a></li>
                  </div>
              </div>
            </div>

            <div class="contate-nos">
                <h2>Contate-nos</h2>
                <div class="linha-vertical2"></div>
                    <p>Alguma mensagem para nós.</p>
                </div>
            </div>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

