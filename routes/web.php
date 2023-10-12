<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\AdminPostController;
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
