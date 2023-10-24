<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Major;
use App\Models\Categories;
use Carbon\Carbon;

class AdminPostController extends Controller
{
    public function list_post(Request $request){
        $keyword = $request->input('search');
        if ($keyword) {
            $post = Post::where('title', 'like', "%$keyword%")
                ->orWhere('content', 'like', "%$keyword%")
                ->get();
        } else {
            $post = Post::all();
        }
        return view('/admin/list-post', compact('post'));
    }
    public function add_post(Request $request){
        if($request->isMethod('post')){
            $post = new Post();
            $post->title = $request->title;
            $post->summarize = $request->summarize;
            $post->content = $request->content;   
            $post->img = $request->img;
            $post->id_user = $request->id_user;
            $post->id_major = $request->id_major;
            $post->id_cate = $request->id_cate;
            $post->save();
            return redirect('admin/list-post')->with('status','Thêm thành công');
        }
        $major = Major::all();
        $categories = Categories::all();
        return view('/admin/list-post-add',compact('major','categories'));
    }
    public function edit_post(Request $request,$id){
        if($request->isMethod('post')){
            $post = Post::find($id);
            $post->title = $request->title;
            $post->summarize = $request->summarize;
            $post->content = $request->content;
            $post->img = $request->img;
            $post->views = $request->views;
            $post->id_user = $request->id_user;
            $post->id_major = $request->id_major;
            $post->id_cate = $request->id_cate;
            $post->save();
            return redirect('admin/list-post')->with('status','Sửa thành công');
        }
        $post = Post::find($id);
        $user = User::find($post->id_user);
        $major = Major::all();
        $categories = Categories::all();
        return view('/admin/list-post-edit',compact('post','user','major','categories'));
    }
    public function delete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/list-post')->with('status','Xóa thành công');
    }
}
