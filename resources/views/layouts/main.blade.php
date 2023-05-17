<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans" rel="stylesheet">
    
        <!-- Link css e js bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- CSS e JS da aplicação -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="rel">
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-header d-flex justify-content-center">
                        <a href="/">
                            <img src="{{ asset('img\logo.png') }}" class="imgHeader" alt="Logo">
                        </a>
                        <a class="navbar-brand" href="/">PointFair</a>
                    </div>
                    <ul class="navbar-nav navbar-right">
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link btn-primary">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link btn-secondary">Cadastrar</a>
                        </li>
                    @endguest
                        <li class="nav-item">
                            <a href="/" class="nav-link">Início</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Feirantes</a>
                        </li>
                        <li class="nav-item">
                            <a href="/sobrenos" class="nav-link">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contato" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="/duvidasFrequentes" class="nav-link">Dúvidas Frequentes</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer class="Rodape">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Sobre Nós</h2>
                        <hr>
                        <p>O nosso objetivo é divulgar e facilitar a comunicação entre feirantes e vendedores autônomos com o público.</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Links</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="/sobrenos"><i class="fas fa-users"></i> Sobre nós</a></li>
                                    <li><a href="/duvidasFrequentes"><i class="far fa-question-circle"></i> Dúvidas Frequentes</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="/contato"><i class="far fa-envelope"></i> Contato</a></li>
                                    <li><a href="/home"><i class="fas fa-home"></i> Página Inicial</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2>Contate-nos</h2>
                        <hr>
                        <p>Alguma mensagem para nós.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/scripts.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
    </body>
</html>