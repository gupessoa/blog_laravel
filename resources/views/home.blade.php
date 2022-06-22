@extends('blog.master')

@section('title', 'MeuBlog | Home')

@section('content')

    <!-- Conteudo principal posts -->
    <div class="content col-md-8 mb-5">
        <!-- Declaração uma sessão do site -->
        <section class="d-flex flex-column">
            @forelse($posts as $post)
                <div class="my-2">
                    <!-- Devido ao H1 ser o titulo principal do site usamos o h2 para outro titulo de importância -->
                    <div class="block-21 d-flex animate-box home-item-post">
                        <a class="img-link" href="{{ route('posts.show', $post) }}">
                            <img src="{{ asset('storage/'.$post->image->path.'') }}" alt="">
                        </a>
                        <div class="text px-3 w-100 h-100">
                            <h4 class="h4 ml-0">
                                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                            </h4>
                            {{--                        {{dd($post->author())}}--}}
                            <p>{{ $post->excerpt }}</p>
                            <div class="meta d-flex justify-between">
                                <div><a href=""><i class="bi bi-calendar"></i> {{ $post->created_at->diffForHumans() }}</a></div>
                                <div><a href=""><i class="bi bi-person"></i> {{ $post->author->name }}</a></div>
                                <div><a href=""><i class="bi bi-chat"></i> {{$post->comments_count}}</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <p class="lead text-center"> There are no posts to show.</p>
            @endforelse

            <div class="d-flex justify-center mt-5">
                {{ $posts->links() }}
            </div>
        </section>
    </div>
    <!-- Aside - Barra Lateral da página -->
    <aside class="col-md-4 animate-box mb-5">
        <div>
            <div class="side">
                <h3 class="fs-3 mb-4">Categories</h3>
                <ul>
                    @foreach($categories as $categorie)
                        <li class="categoria-itens"><a class="categorias-links" href="#">{{ $categorie->name }}<span>{{ $categorie->posts_count}}</span></a></li>
                    @endforeach

                </ul>
            </div>
            <div class="side">
                <h3 class="fs-3 mb-4">Recent Blog</h3>
                @foreach($recent_posts as $recent_post)
                    <div class="f-blog">
                        <a href="{{ route('posts.show', $recent_post) }}" class="f-blog-link">
                            <img class="f-blog-img" src="{{ asset('storage/'.$recent_post->image->path.'') }}" alt="">
                        </a>
                        <div class="desc">
                            <p class="admin"><span>{{ $recent_post->created_at->diffForHumans() }}</span></p>
                            <p class="">
                                <a class="link-dark text-decoration-none fw-bold" href="{{ route('posts.show', $recent_post) }}">
                                    {{ Str::limit($recent_post->title, 20) }}
                                </a>
                            </p>
                            <p>{{ Str::limit($recent_post->excerpt, 20) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mb-5">
                <h3 class="fs-3 mb-4">Tags</h3>
                <div class="block-26">
                    <ul>
                        @foreach($tags as $tag)
                            <li class="tag-item"><a class="tag-link text-decoration-none" href="#">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </aside>

@endsection
