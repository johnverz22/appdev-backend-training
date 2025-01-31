<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all(['id','title', 'content']);
        return $posts;
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
      
        $post = Post::create($validated);
        return response()->json($post, 201);
    }

    // public function destroy($id){
    //     Post::destroy($id);
    //     return response()->json(null, 200);
    // }
    public function destroy(Post $post){
        $post->delete();
        return response()->json(null, 204);
    }

    public function update(Request $request, Post $post){
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
      
        $post->update($validated);
        return response()->json($post, 200);
    }

    public function show(Post $post){
        return response()->json($post,200);
    }
}
