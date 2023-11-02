<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AccoutController;

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);
    Route::get('list-client',[AdminController::class,'list_client']);
    Route::prefix('list-post')->group(function(){
        Route::get('/',[AdminPostController::class,'list_post']);
        Route::post('/',[AdminPostController::class,'list_post']);
        Route::get('add',[AdminPostController::class,'add_post'])->name('post.add');
        Route::post('add',[AdminPostController::class,'add_post'])->name('post.store');
        Route::get('edit/{id}',[AdminPostController::class,'edit_post'])->name('post.edit');
        Route::post('edit/{id}',[AdminPostController::class,'edit_post'])->name('post.update');
        Route::get('delete/{id}',[AdminPostController::class,'delete_post'])->name('post.delete');
    });
    Route::get('list-ncc',[AdminController::class,'list_ncc']);
    Route::get('list-reg',[AdminController::class,'list_reg']);
    Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
    Route::get('list-profit-month',[AdminController::class,'list_profit_month']);
});
Route::get("/dangky",[AccoutController::class,'dangky']);
Route::post("/dangky",[AccoutController::class,'dangky_']);
Route::get("/dangnhap",[AccoutController::class,'dangnhap']);
Route::post("/dangnhap",[AccoutController::class,'dangnhap_']);
Route::get("/quenmatkhau",[AccoutController::class,'quenmatkhau'])->name('quenmatkhau');
Route::post("/quenmatkhau",[AccoutController::class,'quenmatkhau_'])->name('password.reset');
Route::get("/trangchu",function(){
    return view('Accout/trangchu');
});
Route::get("/dangxuat",function(){
    \Auth::logout();
    return redirect('/dangnhap');
});


