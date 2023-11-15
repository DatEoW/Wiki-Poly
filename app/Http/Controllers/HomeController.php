<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $major=DB::table('major')->get();
        $majorC=DB::table('major_child')->get();
        $post=DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name')
        ->get();
        $post_views=DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name')
        ->orderBy('post.views','desc')
        ->limit(5)
        ->get();
        $post_recent=DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name')
        ->orderBy('post.id','desc')
        ->paginate(6);
        return view('Client/index',compact('major','majorC','post','post_views','post_recent'));
    }
    public function sort_search(Request $request)
    {

        $input = $request->all();
        $query = DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name');
        // dd($input['keyword']);
        if (!empty($input['keyword'])) {


            if (!empty($input['cate'])) {
                $query = $query->where('id_cate', '=', $input['cate']);

            }
            if (!empty($input['major'])) {
                $query = $query->where('id_major', '=', $input['major']);
            }
            if (!empty($input['views'])) {
                $query = $query->orderBy('views','desc');

            }
            if (!empty($input['hot'])) {
                $query = $query->where('hot', '=', $input['hot']);
            }

            $query = $query->where('title', 'like', $input['keyword'] . '%');
        } else {
            if (!empty($input['cate'])) {
                $query = $query->where('id_cate', '=', $input['cate']);

            }
            if (!empty($input['major'])) {
                $query = $query->where('id_major', '=', $input['id_major']);
            }
            if (!empty($input['views'])) {
                $query = $query->orderBy('views','desc');

            }
            if (!empty($input['hot'])) {
                $query = $query->where('hot', '=', $input['hot']);
            }
        }


        // dd($query);
        $query = $query->paginate(6);
        $major=\DB::table('major')->paginate(6);
        $majorC=\DB::table('major_child')->paginate(6);


        // dd($query);
        return view('pages.sort_search',compact('query','major','majorC'));
    }
    public function sort_major($major){


        $query = DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name')
        ->where('post.id_major', '=', $major);


        $query = $query->paginate(6);
        $major=\DB::table('major')->paginate(6);
        $majorC=\DB::table('major_child')->paginate(6);


        // dd($query);
        return view('pages.sort_search',compact('query','major','majorC'));

    }
    public function sort_major_child($majorC){



        $query = DB::table('post')
        ->join('category','post.id_cate','category.id')
        ->join('major','post.id_major','major.id')
        ->join('major_child','post.id_major_child','major_child.id')
        ->select('post.*','category.name as cate_name','major.name as major_name','major_child.name as majorC_name')
        ->where('post.id_major_child', '=', $majorC);


        $query = $query->paginate(6);
        $major=\DB::table('major')->paginate(6);
        $majorC=\DB::table('major_child')->paginate(6);


        // dd($query);
        return view('pages.sort_search',compact('query','major','majorC'));

    }

}
