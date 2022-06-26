<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::withCount('posts')->get()
        ]);
    }

    public function show(Category $category)
    {
        $recent_posts = Post::latest()->take(5)->get() ;
        $categories = Category::wiThCount('posts')->orderBy('posts_count', 'desc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('categories.show',[
            'category' => $category,
            'posts' => $category->posts()->paginate(5),
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
