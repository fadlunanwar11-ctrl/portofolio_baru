<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(Request $request){

        $post = Post::all();
        return view('post.index', compact(
            'post'
        ));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        $image = $request->file('image')->store('posts', 'public');
        Post::create([

            'title' => $request->title,

            'description' => $request->description,

            'image' => $image

        ]);
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
