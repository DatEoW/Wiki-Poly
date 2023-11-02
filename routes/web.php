<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Use App\Http\Controllers\AdminController;
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);
    //user

    Route::get('list-user',[AdminController::class,'list_user']);

    //category
    Route::get('list-category',[AdminController::class,'list_categories']);

    //major
    Route::get('list-major',[AdminController::class,'list_major']);

    //major-child
    Route::get('list-major-child',[AdminController::class,'list_major_child']);

    //comment
    Route::get('list-comment',[AdminController::class,'list_comment']);

    //tag
    Route::get('list-tag',[AdminController::class,'list_tag']);

    //post tag
    Route::get('list-post-by-tag',[AdminController::class,'list_post_by_tag']);

    // post
    Route::get('list-post',[AdminController::class,'list_post']);
    Route::get('add-post',[AdminController::class,'add_post_form']);
    Route::post('/upload',[AdminController::class,'uploadimage'])->name('ckeditor.upload');
    Route::post('add-post',[AdminController::class,'add_post']);

});
