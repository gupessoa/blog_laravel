@extends('blog.master')

@section('title', 'MeuBlog | Contato')

@section('content')
    <section>
        <div class="container contact">
            <h1>Contato</h1>
                <h2>Dúvidas? Sugestões? Quer bater um papo?<br>Mande uma mensagem para nós! Prometemos responder.<br> <span>&#128521;</span> </h2>



                <div class="row">
                    <form autocomplete="off" method="POST" action="{{ route('blog.contato.store') }}">
                        @csrf
                        <fieldset class="contactForm mt-5 form-group">
                            <legend>Contate-nos</legend>
                            <div class="col-md-12">
                                <input value="{{old('nome')}}" ype="text" name="nome" id="nomeMsg" placeholder="Nome" required>
                                @error('nome')
                                    <small class="text-red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input value="{{old('email')}}" type="email" name="email" id="emailMsg" placeholder="E-mail" required>
                                @error('email')
                                    <small class="text-red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input value="{{old('tel')}}" type="tel" name="tel" id="tel" pattern="[0-9]{11}" placeholder="Telefone" required>
                                @error('tel')
                                    <small class="text-red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input value="{{old('assunto')}}" type="text" name="assunto" id="assunto" placeholder="Assunto" required>
                                @error('assunto')
                                    <small class="text-red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea  value="{{old('msg')}}" name="msg" id="msg" placeholder="Digite sua Mensagem" required></textarea>
                                @error('msg')
                                    <small class="text-red">{{$message}}</small>
                                @enderror
                            </div>
                            <div>
                                <input type="submit" value="Enviar">
                            </div>

                        </fieldset>
                    </form>
                    <x-blog.message :status="'success'"/>
                </div>
        </div>
    </section>
@endsection
