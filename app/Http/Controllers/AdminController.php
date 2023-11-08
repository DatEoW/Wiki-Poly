<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index_admin(){

        return view('/admin/index');
    }
    public function list_categories(){
        return view('/admin/list-category');
    }
    public function list_major(){
        return view('/admin/list-major');
    }
    public function list_major_child(){
        return view('/admin/list-major-child');
    }
    public function list_comment(){
        return view('/admin/list-comment');
    }
    public function list_tag(){
        return view('/admin/list-tag');
    }
    public function list_post_by_tag(){
        return view('/admin/list-post-by-tag');
    }

    public function list_user(){
        $listuser = DB::table('users')->select('*');
        $listuser = $listuser  ->get();
        // return response()->json($user);
        return view('/admin/list-user',['listuser'=>$listuser]);
    }


    // public function register(){
    //     return view('/registration/create');
    // }
}
