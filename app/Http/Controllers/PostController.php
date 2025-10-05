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
}
