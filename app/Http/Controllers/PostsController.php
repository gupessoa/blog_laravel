<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function show(Post $post)
    {
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

    public function addComment(Post $post)
    {
        $atributos = request()->validate([
            'the_comment' => 'required|min:4|max:300'
        ]);
        $atributos['user_id'] = auth()->id();

        $comment = $post->comments()->create($atributos);

        return redirect('/posts/' . $post->slug . '#comment_' . $comment->id)->with('success', 'Comentário adicionado com sucesso!');
    }
}
