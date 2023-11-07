<?php
namespace App\Http\Controllers;


use App\Http\Controllers\MajorController;
use App\Http\Controllers\MajorChildController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



Use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AccoutController;

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);

    // post
    Route::get('list-post',[AdminController::class,'list_post'])->name('list-post');
    Route::get('add-post',[AdminController::class,'add_post_form'])->name('add-post-form');
    Route::post('/upload',[AdminController::class,'uploadimage'])->name('ckeditor.upload');
    Route::post('add-post',[AdminController::class,'add_post'])->name('add-post-form');

    //user

    Route::get('list-user',[AdminController::class,'list_user'])->name('list-user');

    // //category
    // Route::get('list-category',[AdminController::class,'list_categories'])->name('list-category');

    //major-child
    Route::get('list-major-child',[AdminController::class,'list_major_child'])->name('list-major-child');

    //comment
    Route::get('list-comment',[AdminController::class,'list_comment'])->name('list-comment');

    // //tag
    // Route::get('list-tag',[AdminController::class,'list_tag'])->name('list-tag');

    //post tag
    Route::get('list-post-by-tag',[AdminController::class,'list_post_by_tag']);





    //major nghi
    Route::resource('major',(MajorController::class));
    Route::get('/major-trashed', [MajorController::class, 'trashed'])->name('major.trashed');
    Route::get('/major/soft-delete/{id}', [MajorController::class, 'softDelete'])->name('major.softDelete');
    Route::get('/major/restore/{id}', [MajorController::class, 'restore'])->name('major.restore');
    Route::get('/major-restore-all', [MajorController::class, 'restoreAll'])->name('major.restoreAll');
    Route::get('/major/delete/{id}', [MajorController::class, 'forceDelete'])->name('major.delete');


    //majorC nghi
    Route::resource('majorC',(MajorChildController::class));
    Route::get('/majorC-trashed', [MajorChildController::class, 'trashed'])->name('majorC.trashed');
    Route::get('/majorC/soft-delete/{id}', [MajorChildController::class, 'softDelete'])->name('majorC.softDelete');
    Route::get('/majorC/restore/{id}', [MajorChildController::class, 'restore'])->name('majorC.restore');
    Route::get('/majorC-restore-all', [MajorChildController::class, 'restoreAll'])->name('majorC.restoreAll');
    Route::get('/majorC/delete/{id}', [MajorChildController::class, 'forceDelete'])->name('majorC.delete');


     // Category -huu
     Route::get('list-category', [CategoryController::class, 'list_category'])->name('list-category');
     Route::get('add-category', [CategoryController::class, 'add_category']);
     Route::post('save-category', [CategoryController::class, 'save_category']);
     Route::get('edit-category/{id}', [CategoryController::class, 'edit_category']);
     Route::get('delete-category/{id}', [CategoryController::class, 'delete_category']);
     Route::post('update-category/{id}', [CategoryController::class, 'update_category']);
     Route::get('unactive-category/{id}', [CategoryController::class, 'unactive_category']);
     Route::get('active-category/{id}', [CategoryController::class, 'active_category']);
     // Tag -huu
     Route::get('list-tag', [TagController::class, 'list_tag'])->name('list-tag');
     Route::get('add-tag', [TagController::class, 'add_tag']);
     Route::post('save-tag', [TagController::class, 'save_tag']);
     Route::get('edit-tag/{id}', [TagController::class, 'edit_tag']);
     Route::get('delete-tag/{id}', [TagController::class, 'delete_tag']);
     Route::post('update-tag/{id}', [TagController::class, 'update_tag']);
     Route::get('unactive-tag/{id}', [TagController::class, 'unactive_tag']);
     Route::get('active-tag/{id}', [TagController::class, 'active_tag']);
});
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
    Auth::logout();
    return redirect('/dangnhap');
});


