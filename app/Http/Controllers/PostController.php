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
        $post = Post::all();


        return view('posts.index', compact('post'));
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
    public function edit(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phoneno' => 'required',
            'description' => 'required|string',
        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post Updated Successfully.');
    }
    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
