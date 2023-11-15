<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class IndexController extends Controller
{


    public  function details($slug)
    {
        $major=\DB::table('major')->get();
        $majorC=\DB::table('major_child')->get();
        $post = Post::where('slug', $slug)->first();
        $comment = Comment::where('id_post', $post->id)->where('hidden', 1)->take(5)->get();
        return view('pages.details', compact('post', 'comment','major','majorC'));
    }
}
