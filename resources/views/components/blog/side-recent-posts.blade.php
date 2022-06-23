@props(['recentPosts'])

<div class="side">
    <h3 class="fs-3 mb-4">Recent Blog</h3>
    @foreach($recentPosts as $recent_post)
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
