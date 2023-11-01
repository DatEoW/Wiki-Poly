<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index_admin(){

        return view('/admin/index');
    }
    public function list_client(){

        return view('/admin/list-client');
    }
    public function list_post(){
        return view('/admin/list-post');
    }
    public function list_ncc(){
        return view('/admin/list-ncc');
    }
    public function list_reg(){
        return view('/admin/list-reg');
    }
    public function list_profit_day(){
        return view('/admin/list-profit-day');
    }
    public function list_profit_month(){
        return view('/admin/list-profit-day');
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
