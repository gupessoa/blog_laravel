@extends('blog.master')

@section('content')
    <!-- Declaração uma sessão do site -->
    <section>
        <div class="container">
            <!-- Devido ao H1 ser o titulo principal do site usamos o h2 para outro titulo de importância -->
            <article>
                <div class="container postContainer">
                    <img src="{{ asset("img/1.jpg") }}" alt="" title="" class="postMidia">
                    <h2 class="my-4"><a href="">Eu sou Assim!!!</a></h2>
                    <time datetime="2019-11-19" class="postData">19 Nov 2019</time>
                    <div class="postContent">
                        <div class="text">
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
                        <div class="show">
                            <a href="" class="mostrarMais">Mostrar Mais</a>
                        </div>
                    </div>
                </div>
            </article>
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
