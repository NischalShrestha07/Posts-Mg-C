<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // return "I am learning ";
        // return view('posts.index');


        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phoneno' => 'required',
            'description' => 'required|string',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post added successfully.');
    }
    public function edit(Request $request)
    {
        return view('post.edit');
    }
}
