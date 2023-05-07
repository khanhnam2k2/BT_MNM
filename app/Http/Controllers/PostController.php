<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }
        Post::create([
            'title' => $request->title,
            'abstract' => $request->abstract,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imageName,
        ]);

        return redirect('/')->with('success', 'Post created successfully!');
    }

    public function show(Post $post)
    {
        $relatePosts = Post::where('id', '<>', $post->id)
            ->where('category_id', $post->category_id)
            ->inRandomOrder()->take(3)->get();
        $otherPosts = Post::where('id', '<>', $post->id)->inRandomOrder()->take(4)->get();
        return view('posts.show', compact('post', 'otherPosts', 'relatePosts'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        $imageName = $post->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }
        $post->update([
            'title' => $request->title,
            'abstract' => $request->abstract,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imageName,
        ]);

        return redirect('/')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }
}
