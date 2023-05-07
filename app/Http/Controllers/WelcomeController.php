<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->get();
        $travels = Post::where('category_id', 3)->orderBy('id', 'desc')->take(3)->get();
        $culture = Post::where('category_id', 1)->take(2)->get();
        $politics = Post::where('category_id', 4)->get();
        return view('welcome', compact('posts', 'travels', 'culture', 'politics'));
    }
    public function about()
    {
        return view('about');
    }
}
