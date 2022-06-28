<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->withCount(['comments'])->paginate(10);
        $recent_posts = Post::latest()->take('5')->get() ;
        $categories = Category::wiThCount('posts')->orderBy('posts_count', 'desc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('home',[
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
