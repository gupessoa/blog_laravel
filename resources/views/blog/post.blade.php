@extends('blog.master')

@section('title', $post->title . ' | MyBlog')

@section('custom_css')

	<style>
		.class-single .desc img {
			width: 100%;
		}
	</style>

@endsection

@section('content')
    <!-- Declaração uma sessão do site -->
    <section>
        <div class="container flex-column">
            <!-- Devido ao H1 ser o titulo principal do site usamos o h2 para outro titulo de importância -->
            <article>
                <div class="container postContainer">
                    <img src="{{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '') }}" alt="" title="" class="postMidia">
                    <h2 class="my-4"><a href="">{{ $post->title }}</a></h2>
                    <time datetime="{{ $post->created_at->format('Y/m/d') }}" class="postData">{{ $post->created_at->diffForHumans() }}</time>
                    <div class="postContent">
                        <div>
                            <p>{{ $post->body }}</p>
                            <p class="autor">{{\App\Models\User::find($post->id_user)->name}}</p>
                            <div class="hashtags">
                                <h4>Hashtag</h4>
                                <p>
                                    @foreach($post->tags as $tag)
                                        <a href="">#{{$tag->nome}}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <div class="row row-pb-lg animate-box px-1">
                <div class="col-md-12 px-5">
                    <h2 class="fs-5 fw-bold text-start">{{ count($post->comments) }} Comments</h2>
                    @foreach($post->comments as $comment)
                        <div id="comment_{{ $comment->id }}" class="d-flex flex-row comentario pb-3 border-bottom mt-3">
                            <img  class="rounded-circle" src="{{ $comment->user->image ? asset('storage/'.$comment->user->image->path.'') : '' }}" alt="">
                            <div class="desc">
                                <h4 class="d-flex flex-row justify-content-between mb-2">
                                    <span class="fw-bold">{{ $comment->user->name }}</span>
                                    <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                                </h4>
                                <p>{{$comment->the_comment}}</p>
                                <p class="star">
                                    <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row animate-box mt-4">
                <div class="col-md-12">
                    <x-blog.message :status="'success'"/>
                    <h2 class="colorlib-heading-2 mb-3">Deixe seu comentário</h2>
                    @auth
                    <form method="POST" action="{{ route('posts.add_comment', $post) }}">
                        @csrf
{{--                        <div class="row form-group mb-1 border-light">--}}
{{--                            <div class="col-md-6 comment-form">--}}
{{--                                <!-- <label for="fname">First Name</label> -->--}}
{{--                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <!-- <label for="lname">Last Name</label> -->--}}
{{--                                <input type="text" id="lname" class="form-control" placeholder="Your lastname" >--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row form-group mb-1">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <!-- <label for="email">Email</label> -->--}}
{{--                                <input type="text" id="email" class="form-control" placeholder="Your email address">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row form-group mb-1">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <!-- <label for="subject">Subject</label> -->--}}
{{--                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row form-group mb-1">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="the_comment" id="the_comment" cols="30" rows="10" class="form-control" placeholder="Escreva alguma coisa aqui"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Postar Comentário" class="btn text-light border-none">
                        </div>
                    </form>
                    @endauth

                    @guest
                        <p class="lead text-center">
                            <a class="text-decoration-underline" href="{{route('login')}}">Login</a>
                            OU
                            <a class="text-decoration-underline" href="{{ route('register') }}">Registrar</a>
                        para escrever comentários</p>
                    @endguest
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
    <aside class="col-md-4 animate-box mb-5">
        <div>
            <x-blog.side-categories :categories="$categories"/>
            <x-blog.side-recent-posts :recentPosts="$recent_posts"/>
            <x-blog.side-tags :tags="$tags"/>
        </div>
    </aside>
@endsection
