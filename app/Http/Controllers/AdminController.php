<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index_admin(){

        return view('/admin/index');
    }
    public function list_client(){

        return view('/admin/list-client');
    }
    public function list_post(){

        
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
}
