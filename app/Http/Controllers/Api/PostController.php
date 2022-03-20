<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // $tags = Tag::all(); 
        $posts = Post::all();
        // LOAD PER METTERE DENTRO POST ALTRE TABELLE
        $posts->load('category', 'user');

        // return response()->json([
        //     "dataRichiesta" => now(),
        //     "data" => $posts
        // ]);
        return response()->json($posts);
    }
    // public function store (Request $request) {
    //     $dati = $request->validate([
    //         "title" => "required|min:3",
    //         "content" => "required|",
    //         "category_id" => "required",
    //         "tags" => "required"
    //       ]);

    //       $newPost = new Post();
    //       $newPost->fill($dati);
    //       $newPost->user_id = 1;
    //       $newPost->save();

    //     return response()->json($newPost);
    // }
}
