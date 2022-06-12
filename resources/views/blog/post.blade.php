@extends('blog.master')

@section('title', 'MeuBlog | Meu Post')

@section('content')
    <!-- Declaração uma sessão do site -->
    <section>
        <div class="container flex-column">
            <!-- Devido ao H1 ser o titulo principal do site usamos o h2 para outro titulo de importância -->
            <article>
                <div class="container postContainer">
                    <img src="{{ asset("img/1.jpg") }}" alt="" title="" class="postMidia">
                    <h2 class="my-4"><a href="">Eu sou Assim!!!</a></h2>
                    <time datetime="2019-11-19" class="postData">19 Nov 2019</time>
                    <div class="postContent">
                        <div>
                            <p>Eu sou assim....</p>
                            <p>Eu erro. Eu amo. Eu choro. Eu brinco. Eu sorrio. Eu tenho defeitos. Eu tenho qualidades.
                                Eu sou mal-humorado, me magoo com facilidade e as vezes sou insuportável, reclamo, xingo,
                                ignoro, Eu não sou perfeito.</p>
                            <p>Realmente eu não sou tão doce quanto pensam e nem tão azedo como gostariam.
                                Sou curioso, desconfiado, temperamental, e em alguns casos, teimoso. Tenho coração Mole,
                                sangue quente e insisto na mania de acreditar em sonhos, finais felizes e pessoas sinceras.</p>
                            <p>Comigo é oito ou oitenta, sem meio termos,mais ou menos,
                                ou é ou não é, não tem meia estrada ou rodeios. Não sei fazer nada pela metade ,
                                nem de qualquer jeito, não sei amar um pouco, não sei ser meio amigo, lealdade é pra
                                poucos. Sou assim, simples, intenso.</p>
                            <p>Não sou para todos... Gosto muito do meu mundinho, Ele é cheio de surpresas,
                                palavras soltas e cores misturadas. Às vezes tem um céu azul, outras tempestades.
                                Lá dentro cabem sonhos de todos os tamanhos. Mas não cabe muita gente, todas as pessoas
                                que estão dentro dele não estão por acaso. São necessárias.</p>
                            <p>Nem sempre tenho as melhores atitudes, nem sempre faço o que esta certo,
                                mas o que sai de mim é genuíno.</p>
                            <p class="autor">Gustavo Pessoa</p>
                            <div class="hashtags">
                                <h4>Hashtag</h4>
                                <p><a href="">#GustavoPessoa</a> <a href="">#MeusMomentos</a> <a href="">#MeusPensamentos</a> <a href="">#ParteDeMim</a> <a href="">#Trintei</a> <a href="">#MeuMundo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <div class="row row-pb-lg animate-box px-1">
                <div class="col-md-12 px-5">
                    <h2 class="fs-5 fw-bold text-start">23 Comments</h2>
                    <div class="d-flex flex-row comentario pb-3 border-bottom mt-3">
                        <img  class="rounded-circle" src="{{ asset('img/person1.jpg') }}" alt="">
                        <div class="desc">
                            <h4 class="d-flex flex-row justify-content-between mb-2">
                                <span class="fw-bold">Jacob Webb</span>
                                <span class="text-muted">24 March 2018</span>
                            </h4>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                            <p class="star">
                                <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-row comentario pb-3 border-bottom mt-3">
                        <img  class="rounded-circle" src="{{ asset('img/person1.jpg') }}" alt="">
                        <div class="desc">
                            <h4 class="d-flex flex-row justify-content-between mb-2">
                                <span class="fw-bold">Jacob Webb</span>
                                <span class="text-muted">24 March 2018</span>
                            </h4>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                            <p class="star">
                                <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-row comentario pb-3 border-bottom mt-3">
                        <img  class="rounded-circle" src="{{ asset('img/person1.jpg') }}" alt="">
                        <div class="desc">
                            <h4 class="d-flex flex-row justify-content-between mb-2">
                                <span class="fw-bold">Jacob Webb</span>
                                <span class="text-muted">24 March 2018</span>
                            </h4>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                            <p class="star">
                                <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row animate-box mt-4">
                <div class="col-md-12">
                    <h2 class="colorlib-heading-2 mb-3">Say something</h2>
                    <form action="#">
                        <div class="row form-group mb-1 border-light">
                            <div class="col-md-6 comment-form">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group mb-1">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group mb-1">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group mb-1">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Postar Comentário" class="btn text-light border-none">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="modal">
                <div class="modalContent modalLogin">
                    <span class="closeModal">&times;</span>
                    <form method="post">
                        <fieldset>
                            <legend>Login Administração</legend>
                            <input type="email" name="email" id="email" placeholder="E-mail">
                            <input type="password" name="senha" id="senha" placeholder="Senha">
                            <input type="submit" id="logar" value="Entrar">
                        </fieldset>
                    </form>

                </div>
            </div>    -->
    </section>
@endsection
