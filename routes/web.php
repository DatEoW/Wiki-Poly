<?php

Use App\Http\Controllers\AdminController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MajorChildController;

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);
    Route::get('list-client',[AdminController::class,'list_client']);
    Route::get('list-post',[AdminController::class,'list_post']);
    Route::get('list-ncc',[AdminController::class,'list_ncc']);
    Route::get('list-reg',[AdminController::class,'list_reg']);
    Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
    Route::get('list-profit-month',[AdminController::class,'list_profit_month']);

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
