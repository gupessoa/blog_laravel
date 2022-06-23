@props(['categories'])
<div class="side">
    <h3 class="fs-3 mb-4">Categories</h3>
    <ul>
        @foreach($categories as $categorie)
            <li class="categoria-itens"><a class="categorias-links" href="#">{{ $categorie->name }}<span>{{ $categorie->posts_count}}</span></a></li>
        @endforeach

    </ul>
</div>
