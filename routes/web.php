<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index_admin']);
    Route::get('list-client', [AdminController::class, 'list_client']);
    Route::get('list-post', [AdminController::class, 'list_post']);
    Route::get('list-ncc', [AdminController::class, 'list_ncc']);
    Route::get('list-reg', [AdminController::class, 'list_reg']);
    Route::get('list-profit-day', [AdminController::class, 'list_profit_day']);
    Route::get('list-profit-month', [AdminController::class, 'list_profit_month']);
    // Category -huu
    Route::get('list-category', [CategoryController::class, 'list_category']);
    Route::get('add-category', [CategoryController::class, 'add_category']);
    Route::post('save-category', [CategoryController::class, 'save_category']);
    Route::get('edit-category/{id}', [CategoryController::class, 'edit_category']);
    Route::get('delete-category/{id}', [CategoryController::class, 'delete_category']);
    Route::post('update-category/{id}', [CategoryController::class, 'update_category']);
    Route::get('unactive-category/{id}', [CategoryController::class, 'unactive_category']);
    Route::get('active-category/{id}', [CategoryController::class, 'active_category']);
    // Tag -huu
    Route::get('list-tag', [TagController::class, 'list_tag']);
    Route::get('add-tag', [TagController::class, 'add_tag']);
    Route::post('save-tag', [TagController::class, 'save_tag']);
    Route::get('edit-tag/{id}', [TagController::class, 'edit_tag']);
    Route::get('delete-tag/{id}', [TagController::class, 'delete_tag']);
    Route::post('update-tag/{id}', [TagController::class, 'update_tag']);
    Route::get('unactive-tag/{id}', [TagController::class, 'unactive_tag']);
    Route::get('active-tag/{id}', [TagController::class, 'active_tag']);
});
