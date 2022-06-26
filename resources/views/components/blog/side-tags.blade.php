@props(['tags'])

<div class="mb-5">
    <h3 class="fs-3 mb-4">Tags</h3>
    <div class="block-26">
        <ul>
            @foreach($tags as $tag)
                <li class="tag-item"><a class="tag-link text-decoration-none" href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
