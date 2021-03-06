<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Tags Meta de configirações iniciais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tags meta de definições basicas do site -->
    <meta name="author" content="Gustavo Pessoa - CodNome.com.br">
    <meta name="description" content="Descrição do site aqui">
    <meta name="keywords" content="todas, as palavras, chavss do site, separadas, por virgula">
    <!--Meta Tags ogg - SocialNetworks-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="nome do site">
    <meta property="og:description" content="Descrição do site">
    <meta property="og:url" content="url do site">
    <meta property="og:image" content="imagem prévia do site">
    <!-- titulo da pagina -->
    <title>@yield('title')</title>
    <!-- Fontes personalizadas -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- link para reset Normalize e Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- links css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- links js -->
</head>
<body style="background-image: url('{{ asset('img/bg.png') }}');">
<!-- Cabeçalho da página -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent my-5">
        <div class="container">
{{--            <a class="navbar-brand" href="#">Navbar</a>--}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('home')) || (request()->is('blog.home')) ? 'active' : '' }}" aria-current="page" href="{{ route('blog.home') }}">Blog</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('blog.escritores') }}">Escritores</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->segment(1) == 'contato') ? 'active' : '' }}" href="{{ route('blog.contato.create') }}">Contato</a>
                    </li>

                </ul>
                <div class="text-end">
                    @guest
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center" href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        </ul>
                    @endguest
                    @auth
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ \App\Models\User::find(auth()->id())->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light border-none" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('nav-logout-form').submit();" href="#">Logout</a>
                                        <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endauth
                </div>
{{--                <form class="d-flex">--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                </form>--}}
            </div>
        </div>
    </nav>
{{--    <nav class="menu">--}}
{{--        <div class="container">--}}
{{--            <ul>--}}
{{--                <li><a href=" {{ route('blog.home') }}" class="active">Blog</a></li>--}}
{{--                <li><a href="{{ route('blog.escritores') }}">Escritores</a></li>--}}
{{--                <li><a href="{{ route('blog.contato') }}">Contato</a></li>--}}
{{--            </ul>--}}
{{--            @guest--}}
{{--                <ul>--}}
{{--                    <li class="dropDown"><a href="#" class="lgAdmin"><img src="{{ asset('img/admIcon.png')}}" alt=""></a>--}}
{{--                        <div class="login">--}}
{{--                            <form method="post">--}}
{{--                                <fieldset class="fieldsetLogin">--}}
{{--                                    <legend>Login Administração</legend>--}}
{{--                                    <input type="email" name="email" id="email" placeholder="E-mail">--}}
{{--                                    <input type="password" name="senha" id="senha" placeholder="Senha">--}}
{{--                                    <input type="submit" id="logar" value="Entrar">--}}
{{--                                </fieldset>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endguest--}}
{{--            @auth--}}
{{--                <ul>--}}
{{--                    <li class="dropDown">--}}
{{--                        <a href="#" class="lgAdmin">{{ auth()->user()->name }}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    </nav>--}}
    <h1><a href="{{ route('blog.home') }}">Meu Blog</a> </h1>
    <h2>Um blog criado por mim, especifico para que eu gosto</h2>
</header>
<!-- Conteúdo Principal da Página -->
<main class="container">
    @yield('content')
</main>
<!-- Rodapé da Página -->
<footer>
    <div class="socialNetworks">
        <ul>
            <li><a href=""><img src="{{ asset('img/twitter.png')}}" alt="" title=""></a></li>
            <li><a href=""><img src="{{ asset('img/facebook.png')}}" alt="" title=""></a></li>
            <li><a href=""><img src="{{ asset('img/instagram.png')}}" alt="" title=""></a></li>
        </ul>
    </div>
    <!-- delcaração de direitos padrão -->
    <p>&copy; Copyright 2022 - CodNome.com.br - Todos os Direitos Reservados</p>
</footer>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
