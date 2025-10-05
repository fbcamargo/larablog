<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render(
            'Post/Index',
            [
                'posts' => Post::all()
            ]
        );
    }

    public function create()
    {
        return Inertia::render(
            'Post/Create'
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }

    public function edit(Post $post)
    {
        return Inertia::render(
            'Post/Create',
            [
                'post' => $post,
                'isUpdating' => true
            ]
        );
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->update($data);

        return redirect()->route('posts.index');
    }
}
