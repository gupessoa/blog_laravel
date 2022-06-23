<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $posts = Post::withCount(['comments'])->paginate(10);
        $recent_posts = Post::latest()->take('5')->get() ;
        $categories = Category::wiThCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('blog.post', [
            'post' => $post,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
