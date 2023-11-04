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
    Route::get('list-client',[AdminController::class,'list_client']);
    Route::get('list-post',[AdminController::class,'list_post']);
    Route::get('list-ncc',[AdminController::class,'list_ncc']);
    Route::get('list-reg',[AdminController::class,'list_reg']);
    Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
    Route::get('list-profit-month',[AdminController::class,'list_profit_month']);
    Route::get('list-user',[AdminController::class,'list_user']);

   // Route::post('/register', [RegisterController::class, 'CreateUser']);
});
