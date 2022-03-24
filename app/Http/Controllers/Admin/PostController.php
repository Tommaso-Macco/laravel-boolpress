<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::withTrashed()->get();
        return view('admin.posts.index', compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.create', compact("categories", "post", "tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dati = $request->validate([
            "title" => "required|min:3",
            "content" => "required|",
            "category_id" => "required",
            "tags" => "required",
            "coverImg" => "nullable|max:1000"
          ]);
          $post = new Post;
          $post->fill($dati);

          if (key_exists('coverImg', $dati)) {
              $post->coverImg = Storage::put('postImage', $dati['coverImg']);
          }

          $post->user_id = Auth::user()->id;

          $post->save();
          $post->tags()->attach($dati["tags"]);

          return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('admin.posts.show', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact("post", "categories", "tags"));
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
        // $allDati = $request->all();
        // dd($allDati);
        $dati = $request->validate([
            "title" => "required|min:3",
            "content" => "required|",
            "category_id" => "required",
            "tags" => "required|exists:tags,id",
            "coverImg" => "nullable|image|max:1000"
          ]);
          $post = post::findOrFail($id);
          $post->update($dati);

          if (key_exists('coverImg', $dati)) {
              
            if ($post->coverImg) {
                storage::delete($post->coverImg);
            }
            $coverImg = Storage::put("postImage", $dati['coverImg']);

            $post->coverImg = $coverImg;
            $post->save();

          }

          $post->tags()->sync($dati["tags"]);
          return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // if ($post->coverImg) {
        //     storage::delete($post->coverImg);
        // }
        // $post->tags()->detach();


        // SOFT DELETE
        $post->delete();
        
        return redirect()->route('admin.posts.index');
    }
}
