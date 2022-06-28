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
                                <div><a href=""><i class="bi bi-person"></i> {{\App\Models\User::find($post->id_user)->name}} </a></div>
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
            <x-blog.side-categories :categories="$categories"/>
            <x-blog.side-recent-posts :recentPosts="$recent_posts"/>
            <x-blog.side-tags :tags="$tags"/>
        </div>
    </aside>

@endsection
