<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Use App\Http\Controllers\UserController;
// Route::prefix('user')->group(function(){
//     Route::get('/',[UserController::class,'index_admin']);
//     Route::get('list-client',[AdminController::class,'list_client']);
//     Route::get('list-post',[AdminController::class,'list_post']);
//     Route::get('list-ncc',[AdminController::class,'list_ncc']);
//     Route::get('list-reg',[AdminController::class,'list_reg']);
//     Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
//     Route::get('list-profit-month',[AdminController::class,'list_profit_month']);
   // Route::post('/register', [RegisterController::class, 'CreateUser']);
// });

// Route::get('/user', 'UserController@index')->name('user.all');

// Route::post('/user', 'UserController@store')->name('user.store');

// Route::get('/user/{expense}', 'ExpenseController@show')->name('user.show');

// Route::put('/user/{expense}', 'ExpenseController@update')->name('user.update');

// Route::delete('/user/{expense}', 'ExpenseController@destory')->name('expenses.destroy');