@props(['categories'])
<div class="side">
    <h3 class="fs-3 mb-4">Categories</h3>
    <ul>
{{--        {{ dd($categories) }}--}}
        @foreach($categories as $categorie)

            <li class="categoria-itens"><a class="categorias-links" href={{ route('categories.show', $categorie) }}>{{ $categorie->name }}<span>{{ $categorie->posts_count}}</span></a></li>
        @endforeach

    </ul>
</div>
