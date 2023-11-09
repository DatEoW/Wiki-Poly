<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public  function home()
    {
        $post_new5 = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.home', compact('post_new5'));
    }

    public  function details($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('pages.details', compact('post'));
    }
}