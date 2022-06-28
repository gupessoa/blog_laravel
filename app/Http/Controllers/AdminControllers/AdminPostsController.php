<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminPostsController extends Controller
{

    private $rules = [
            'title' => 'required|max:200',
            'slug' => 'required|max:200',
            'excerpt' => 'required|max:1000',
            'category_id' => 'required|numeric',
            'thumbnail' => 'required|file|mimes:jpg,png,webp,svg,jpeg',
            'body' => 'required',
        ];

    public function index()
    {
        return view('admin_dashboard.posts.index', [
                    'posts' => Post::with('category')->orderBy('id', 'DESC')->get(),
                ]);
    }

    public function create()
    {
        return view('admin_dashboard.posts.create', [
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validated = $request->validate($this->rules);
        $validated['category_id'] = $request->category_id;
        $validated['id_user'] = auth()->id();
        $post = Post::create($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->store('images', 'public');

            $post->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        $tags = explode(',', $request->input('tags'));
        $tags_ids = [];
        foreach($tags as $tag){
            $tag_ob = Tag::create(['name' => trim($tag)]);
            $tags_ids[] = $tag_ob->id;
        }

        if(count($tags_ids) > 0)
            $post->tags()->sync( $tags_ids );

        return redirect()->route('admin.posts.create')->with('success', 'Post criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = '';
       foreach($post->tags as $key => $tag)
       {
           $tags .= $tag->name;
           if($key !== count($post->tags) - 1)
               $tags .= ', ';
       }

        return view('admin_dashboard.posts.edit', [
            'post' => $post,
            'tags' => $tags,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->rules['thumbnail'] = 'nullable|file|mimes:jpg,png,webp,svg,jpeg|dimensions:max_width=800,max_height=300';
        $validated = $request->validate($this->rules);

        $post->update($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->store('images', 'public');

            $post->image()->update([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        $tags = explode(',', $request->input('tags'));
                $tags_ids = [];
                foreach($tags as $tag){

                    $tag_exist = $post->tags()->where('name', trim($tag) )->count();
                    if($tag_exist == 0) {
                        $tag_ob = Tag::create(['name' => $tag]);
                        $tags_ids[] = $tag_ob->id;
                    }
                }

                if(count($tags_ids) > 0)
                    $post->tags()->syncWithoutDetaching( $tags_ids );

        return redirect()->route('admin.posts.edit', $post)->with('success', 'Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->delete();
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post excluido com sucesso.');
    }
}
