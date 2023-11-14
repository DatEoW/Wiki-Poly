<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function list_post(){
        $posts = DB::table("post")->get();
        return view('/admin/list-post',compact('posts'));
    }
    public function add_post_form(){
        $cate=DB::table('category')->get();
        $major=DB::table('major')->get();
        $majorC=DB::table('major_child')->get();

        return view('/admin/post/add-post',compact('cate','major','majorC'));
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

        $input = $request->all();
        $input['slug'] = Str::of($input['title'])->slug('-');
        //id_user=1
        $input['id_users'] = 1;
        if(request()->hasFile('img')){
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/uploads/',$image);
            $input['img'] = '/uploads/'.$image;
        }
        $post = Post::create($input);
        session()->flash('success', 'Thêm thành công');
        return redirect()->route('list-post');
    }
    public function edit_post($id){
        $post = Post::find($id);
        $cate=DB::table('category')->get();
        $major=DB::table('major')->get();
        $majorC=DB::table('major_child')->get();
        return view('/admin/post/edit-post',compact('post','cate','major','majorC'));
    }
    public function update_post(Request $request,$id){
        $post = Post::find($id);
        $input = $request->all();
        $input['slug'] = Str::of($input['title'])->slug('-');
        if(request()->hasFile('img')){
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/uploads/',$image);
            $input['img'] = '/uploads/'.$image;
        }
        $post->update($input);
        return redirect()->route('list-post');
    }
    public function delete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('list-post');
    }
    public function hidden_post($id){
        $post = Post::find($id);
        if($post->hidden == 0){
            $post->hidden = 1;
        }else{
            $post->hidden = 0;
        }
        $post->update();
        return redirect()->route('list-post');
    }
}
