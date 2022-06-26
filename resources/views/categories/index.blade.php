@extends('blog.master')

@section('title', 'Categorias | Home')

@section('content')

    <!-- Conteudo principal posts -->
    <div class="content col-md-12 mb-5">
        <!-- Declaração uma sessão do site -->
        <section class="d-flex flex-column">
            @forelse($categories as $category)
                <div class="my-2">
                    <!-- Devido ao H1 ser o titulo principal do site usamos o h2 para outro titulo de importância -->
                    <div class="block-21 d-flex animate-box home-item-post">
                        <div class="text px-3 w-100 h-100">
                            <h4 class="h4 ml-0">
                                <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
                            </h4>
                            {{--                        {{dd($post->author())}}--}}
                            <p>sdfdsfgsdfgsdf</p>
                            <div class="meta d-flex justify-between">
                                <div><a href=""><i class="bi bi-calendar"></i> {{ $category->created_at->diffForHumans() }}</a></div>
                                <div><a href=""><i class="bi bi-person"></i> {{ $category->user->name }}</a></div>

                                <div class="meta d-flex justify-between">
                                    <div><a href=""><i class="bi bi-chat"></i> {{$category->posts_count}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <p class="lead text-center"> There are no catgeories to show.</p>
            @endforelse

        </section>
    </div>

@endsection
