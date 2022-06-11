<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Tags Meta de configirações iniciais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tags meta de defini~ções basicas do site -->
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
    <title>Meu Blog</title>
    <!-- Fontes personalizadas -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- link para reset Normalize e Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- links css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- links js -->
</head>
<body style="background-image: url("{{ asset('img/bg.png') }}")">
<!-- Cabeçalho da página -->
<header>
    <nav class="menu">
        <div class="container">
            <ul>
                <li><a href="./index.php" class="active">Blog</a></li>
                <li><a href="pages/writers.php">Escritores</a></li>
                <li><a href="pages/contact.php">Contato</a></li>
            </ul>
            <ul>
                <li class="dropDown"><a href="#" class="lgAdmin"><img src="{{ asset('img/admIcon.png')}}" alt=""></a>
                    <div class="login">
                        <form method="post">
                            <fieldset class="fieldsetLogin">
                                <legend>Login Administração</legend>
                                <input type="email" name="email" id="email" placeholder="E-mail">
                                <input type="password" name="senha" id="senha" placeholder="Senha">
                                <input type="submit" id="logar" value="Entrar">
                            </fieldset>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <h1><a href="./index.php">Meu Blog</a> </h1>
    <h2>Um blog criado por mim, especifico para que eu gosto</h2>
</header>
<!-- Conteúdo Principal da Página -->
<main class="container">
    <!-- Conteudo principal posts -->
    <div class="content col-md-8">
        @yield('content')
    </div>
    <!-- Aside - Barra Lateral da página -->
    <aside class="col-md-4 animate-box">
        <div>
            <div class="side">
                <h3 class="fs-3 mb-4">Categories</h3>
                <ul>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Education <span>10</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Courses <span>43</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Fashion <span>21</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Business <span>65</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Marketing <span>34</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Travel <span>45</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Video <span>22</span></a></li>
                    <li class="categoria-itens"><a class="categorias-links" href="#">Audio <span>13</span></a></li>
                </ul>
            </div>
            <div class="side">
                <h3 class="fs-3 mb-4">Recent Blog</h3>
                <div class="f-blog">
                    <a href="blog.html" class="f-blog-link">
                        <img class="f-blog-img" src="{{ asset('img/blog-1.jpg') }}" alt="">
                    </a>
                    <div class="desc">
                        <p class="admin"><span>18 April 2018</span></p>
                        <p class=""><a class="link-dark text-decoration-none fw-bold" href="blog.html">Creating Mobile Apps</a></p>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
                <div class="f-blog">
                    <a href="blog.html" class="f-blog-link">
                        <img class="f-blog-img" src="{{ asset('img/blog-1.jpg') }}" alt="">
                    </a>
                    <div class="desc">
                        <p class="admin"><span>18 April 2018</span></p>
                        <p class=""><a class="link-dark text-decoration-none fw-bold" href="blog.html">Creating Mobile Apps</a></p>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
                <div class="f-blog">
                    <a href="blog.html" class="f-blog-link">
                        <img class="f-blog-img" src="{{ asset('img/blog-1.jpg') }}" alt="">
                    </a>
                    <div class="desc">
                        <p class="admin"><span>18 April 2018</span></p>
                        <p class=""><a class="link-dark text-decoration-none fw-bold" href="blog.html">Creating Mobile Apps</a></p>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3 class="fs-3 mb-4">Tags</h3>
                <div class="block-26">
                    <ul>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">code</a></li>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">design</a></li>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">typography</a></li>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">development</a></li>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">creative</a></li>
                        <li class="tag-item"><a class="tag-link text-decoration-none" href="#">codehack</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
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
