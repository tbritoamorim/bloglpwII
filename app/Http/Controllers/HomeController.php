<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('draft', '=', 0)->get();
        return view('home')->with('posts', $posts);
    }
}
