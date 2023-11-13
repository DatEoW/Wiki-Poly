<?php

namespace App\Http\Controllers;


use App\Http\Controllers\MajorController;
use App\Http\Controllers\MajorChildController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//show trang chủ va trang chi tiết
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/details/{slug}', [IndexController::class, 'details'])->name('details');

// Route::get('/',[HomeController::class,'index'])->name('index');



//chỉ có tài khoản đã đăng nhập mới được vào
Route::group(['middleware' => 'auth'], function () {
    Route::get('/account', function () {
        return view('trangtestdangnhap');
    })->name('account');
});
// check tài khoản admin cấm vào user
Route::group(['middleware' => 'auth','checkAdminRole'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index_admin'])->name('admin');

        // post
        Route::get('list-post', [PostController::class, 'list_post'])->name('list-post');
        Route::get('add-post', [PostController::class, 'add_post_form'])->name('add-post-form');
        Route::post('/upload', [PostController::class, 'uploadimage'])->name('ckeditor.upload');
        Route::post('add-post', [PostController::class, 'add_post'])->name('add-post-form');
        Route::get('edit-post{id}', [PostController::class, 'edit_post'])->name('edit-post');
        Route::post('edit-post{id}', [PostController::class, 'update_post'])->name('update-post');
        Route::get('delete-post{id}', [PostController::class, 'delete_post'])->name('delete-post');
        Route::get('hidden-post{id}', [PostController::class, 'hidden_post'])->name('hidden-post');

        //user

        Route::get('list-user', [AdminController::class, 'list_user'])->name('list-user');

        // //category
        // Route::get('list-category',[AdminController::class,'list_categories'])->name('list-category');

        //major-child
        Route::get('list-major-child', [AdminController::class, 'list_major_child'])->name('list-major-child');

        //comment
        Route::get('list-comment', [AdminController::class, 'list_comment'])->name('list-comment');

        // //tag
        // Route::get('list-tag',[AdminController::class,'list_tag'])->name('list-tag');

        //post tag
        Route::get('list-post-by-tag', [AdminController::class, 'list_post_by_tag']);





        //major nghi
        Route::resource('major', (MajorController::class));
        Route::get('/major-trashed', [MajorController::class, 'trashed'])->name('major.trashed');
        Route::get('/major/soft-delete/{id}', [MajorController::class, 'softDelete'])->name('major.softDelete');
        Route::get('/major/restore/{id}', [MajorController::class, 'restore'])->name('major.restore');
        Route::get('/major-restore-all', [MajorController::class, 'restoreAll'])->name('major.restoreAll');
        Route::get('/major/delete/{id}', [MajorController::class, 'forceDelete'])->name('major.delete');
        Route::get('unactive-major/{id}', [MajorController::class, 'unactive_major'])->name('major.unactive');
        Route::get('active-major/{id}', [MajorController::class, 'active_major'])->name('major.active');;


        //majorC nghi
        Route::resource('majorC', (MajorChildController::class));
        Route::get('/majorC-trashed', [MajorChildController::class, 'trashed'])->name('majorC.trashed');
        Route::get('/majorC/soft-delete/{id}', [MajorChildController::class, 'softDelete'])->name('majorC.softDelete');
        Route::get('/majorC/restore/{id}', [MajorChildController::class, 'restore'])->name('majorC.restore');
        Route::get('/majorC-restore-all', [MajorChildController::class, 'restoreAll'])->name('majorC.restoreAll');
        Route::get('/majorC/delete/{id}', [MajorChildController::class, 'forceDelete'])->name('majorC.delete');
        Route::get('unactive-majorc/{id}', [MajorChildController::class, 'unactive_majorC'])->name('majorC.unactive');
        Route::get('active-majorc/{id}', [MajorChildController::class, 'active_majorC'])->name('majorC.active');;

        // Category -huu
        // xóa mềm category
        Route::resource('category', (CategoryController::class));
        Route::get('/category-trashed', [CategoryController::class, 'trashed'])->name('category.trashed');
        Route::get('/category/soft-delete/{id}', [CategoryController::class, 'softDelete'])->name('category.softDelete');
        Route::get('/category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::get('/category-restore-all', [CategoryController::class, 'restoreAll'])->name('category.restoreAll');
        Route::get('/category/delete/{id}', [CategoryController::class, 'forceDelete'])->name('category.delete');

        Route::get('list-category', [CategoryController::class, 'list_category'])->name('list-category');
        Route::get('add-category', [CategoryController::class, 'add_category']);
        Route::post('save-category', [CategoryController::class, 'save_category']);
        Route::get('edit-category/{id}', [CategoryController::class, 'edit_category']);
        // Route::get('delete-category/{id}', [CategoryController::class, 'delete_category']);
        Route::post('update-category/{id}', [CategoryController::class, 'update_category']);
        Route::get('unactive-category/{id}', [CategoryController::class, 'unactive_category'])->name('category.unactive');
        Route::get('active-category/{id}', [CategoryController::class, 'active_category'])->name('category.active');


        // Tag -huu

        // xóa mềm tag
        Route::resource('tag', (TagController::class));
        Route::get('/tag-trashed', [TagController::class, 'trashed'])->name('tag.trashed');
        Route::get('/tag/soft-delete/{id}', [TagController::class, 'softDelete'])->name('tag.softDelete');
        Route::get('/tag/restore/{id}', [TagController::class, 'restore'])->name('tag.restore');
        Route::get('/tag-restore-all', [TagController::class, 'restoreAll'])->name('tag.restoreAll');
        Route::get('/tag/delete/{id}', [TagController::class, 'forceDelete'])->name('tag.delete');

        Route::get('list-tag', [TagController::class, 'list_tag'])->name('list-tag');
        Route::get('add-tag', [TagController::class, 'add_tag']);
        Route::post('save-tag', [TagController::class, 'save_tag']);
        Route::get('edit-tag/{id}', [TagController::class, 'edit_tag']);
        // Route::get('delete-tag/{id}', [TagController::class, 'delete_tag']);
        Route::post('update-tag/{id}', [TagController::class, 'update_tag']);
        Route::get('unactive-tag/{id}', [TagController::class, 'unactive_tag'])->name('tag.unactive');
        Route::get('active-tag/{id}', [TagController::class, 'active_tag'])->name('tag.active');
    });
});


// account
Route::get('login',[AccountController::class,'login'])->name('login');
Route::post('login',[AccountController::class,'login_'])->name('logingo');
Route::get('register',[AccountController::class,'register'])->name('register');
Route::post('register',[AccountController::class,'register_']);
Route::get('forgot-password1',[AccountController::class,'forgot_password'])->name('forgot-password');
Route::post('forgot-password1',[AccountController::class,'forgot_password_'])->name('password.reset');
Route::get('forgot-password',[AccountController::class,'reset_password'])->name('password.reset');
Route::delete('logout',[AccountController::class,'logout'])->name('logout');

// giao diện
Route::get('404', function () {
    return view('404');
})->name('404');
