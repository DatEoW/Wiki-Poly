<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\UserController;
use App\Models\User;

// Use App\Http\Controllers\SessionsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class,'create']);
Route::post('/register', [UserController::class,'store']);

Route::get('/user/update/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);

Route::get('/user/delete/{id}', [UserController::class, 'delete']);

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);

    // post
    Route::get('list-post',[AdminController::class,'list_post'])->name('list-post');
    Route::get('add-post',[AdminController::class,'add_post_form'])->name('add-post-form');
    Route::post('/upload',[AdminController::class,'uploadimage'])->name('ckeditor.upload');
    Route::post('add-post',[AdminController::class,'add_post'])->name('add-post-form');

    //user

    Route::get('list-user',[AdminController::class,'list_user'])->name('list-user');

    //category
    Route::get('list-category',[AdminController::class,'list_categories'])->name('list-category');

    //major
    Route::get('list-major',[AdminController::class,'list_major'])->name('list-major');

    //major-child
    Route::get('list-major-child',[AdminController::class,'list_major_child'])->name('list-major-child');

    //comment
    Route::get('list-comment',[AdminController::class,'list_comment'])->name('list-comment');

    //tag
    Route::get('list-tag',[AdminController::class,'list_tag'])->name('list-tag');

    //post tag
    Route::get('list-post-by-tag',[AdminController::class,'list_post_by_tag']);



   // Route::post('/register', [RegisterController::class, 'CreateUser']);
});
