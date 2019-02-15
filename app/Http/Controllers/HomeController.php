<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::latest()->simplePaginate(2);
        return view('welcome',compact('post'));
    }

    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        return view('post.show',compact('post'));
    }
}
