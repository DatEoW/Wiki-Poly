<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

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
    public function add_post_form(){
        return view('/admin/add-post');
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
    public function add_post(){
        
    }

}
