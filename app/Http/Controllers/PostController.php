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
}
