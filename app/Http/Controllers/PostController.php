<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image')
            ->store('posts', 'public');

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if ($request->hasFile('image')) {

            Storage::disk('public')
                ->delete($post->image);

            $image = $request->file('image')
                ->store('posts', 'public');

            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image
            ]);

        } else {

            $post->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}