@extends('blog.master')

@section('content')
    <section>
        <div class="container contact">
            <h1>Contato</h1>
                <h2>Dúvidas? Sugestões? Quer bater um papo?<br>Mande uma mensagem para nós! Prometemos responder.<br> <span>&#128521;</span> </h2>
                <div>
                    <form method="post">
                        <fieldset class="contactForm mt-5">
                            <legend>Contate-nos</legend>
                            <input type="text" name="nome" id="nomeMsg" placeholder="Nome" required>
                            <input type="email" name="email" id="emailMsg" placeholder="E-mail" required>
                            <input type="tel" name="tel" id="tel" pattern="[0-9]{11}" placeholder="Telefone" required>
                            <input type="text" name="assunto" id="assunto" placeholder="Assunto" required>
                            <textarea name="msg" id="msg" placeholder="Digite sua Mensagem" required></textarea>
                            <div>
                                <input type="submit" value="Enviar">
                            </div>

                        </fieldset>
                    </form>
                </div>
        </div>
    </section>
@endsection
