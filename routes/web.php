<?php
namespace App\Http\Controllers;


use App\Http\Controllers\MajorController;
use App\Http\Controllers\MajorChildController;

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\UserController;
use App\Models\User;

// Use App\Http\Controllers\SessionsController;
Route::get('/', function () {
    return view('welcome');
});



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

    //major-child
    Route::get('list-major-child',[AdminController::class,'list_major_child'])->name('list-major-child');

    //comment
    Route::get('list-comment',[AdminController::class,'list_comment'])->name('list-comment');

    //tag
    Route::get('list-tag',[AdminController::class,'list_tag'])->name('list-tag');

    //post tag
    Route::get('list-post-by-tag',[AdminController::class,'list_post_by_tag']);



   // Route::post('/register', [RegisterController::class, 'CreateUser']);
    Route::resource('major',(MajorController::class));
    Route::get('/major-trashed', [MajorController::class, 'trashed'])->name('major.trashed');
    Route::get('/major/soft-delete/{id}', [MajorController::class, 'softDelete'])->name('major.softDelete');
    Route::get('/major/restore/{id}', [MajorController::class, 'restore'])->name('major.restore');
    Route::get('/major-restore-all', [MajorController::class, 'restoreAll'])->name('major.restoreAll');
    Route::get('/major/delete/{id}', [MajorController::class, 'forceDelete'])->name('major.delete');


    // Route::get('list-major-child',[MajorChildController::class,'index']);
    Route::resource('majorC',(MajorChildController::class));
    Route::get('/majorC-trashed', [MajorChildController::class, 'trashed'])->name('majorC.trashed');
    Route::get('/majorC/soft-delete/{id}', [MajorChildController::class, 'softDelete'])->name('majorC.softDelete');
    Route::get('/majorC/restore/{id}', [MajorChildController::class, 'restore'])->name('majorC.restore');
    Route::get('/majorC-restore-all', [MajorChildController::class, 'restoreAll'])->name('majorC.restoreAll');
    Route::get('/majorC/delete/{id}', [MajorChildController::class, 'forceDelete'])->name('majorC.delete');

});
