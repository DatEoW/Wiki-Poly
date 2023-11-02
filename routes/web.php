<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Use App\Http\Controllers\AdminController;
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);
    Route::get('list-client',[AdminController::class,'list_client']);
    Route::get('list-post',[AdminController::class,'list_post']);
    Route::get('list-ncc',[AdminController::class,'list_ncc']);
    Route::get('list-reg',[AdminController::class,'list_reg']);
    Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
    Route::get('list-profit-month',[AdminController::class,'list_profit_month']);

    Route::get('add-post',[AdminController::class,'add_post_form']);
    Route::post('/upload',[AdminController::class,'uploadimage'])->name('ckeditor.upload');
    Route::post('add-post',[AdminController::class,'add_post']);

});
