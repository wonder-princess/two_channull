<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'display_name' => ['required', 'max:20'],
            'post_text' => ['required'],
        ]);

        Post::create($validated);

        return redirect()
            ->route('posts.index')
            ->with('status', '投稿を作成しました');

    }
}
