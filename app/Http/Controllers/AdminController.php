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
    public function list_post(){
        return view('/admin/list-post');
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

    public function add_post_form(){
        $cate=DB::table('category')->get();
        $major=DB::table('major')->get();
        $majorC=DB::table('major_child')->get();

        return view('/admin/add-post',compact('cate','major','majorC'));
    }
    public function uploadimage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $orginName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($orginName, PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_product_des.' . $extention;

            $request->file('upload')->move(public_path('uploads'), $fileName);

            $url = asset('uploads/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
    public function add_post(Request $request){

        $input=$request->all();
        $input['slug']= Str::of($input['title'])->slug('-');
        $post=Post::create($input);
        return view('/admin/list-post');

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
