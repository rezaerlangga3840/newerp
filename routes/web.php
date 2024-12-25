<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BranchesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'dashboard'], function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::group(['prefix'=>'profile'], function(){
            Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        Route::group(['middleware'=>['privileges:superadmin,admin']],function(){
            Route::resource('/branches', BranchesController::class);
        });
    });
    
});

/*
Route::group(['middleware'=>['auth','privileges:superadmin,admin,standard']],function(){
    
    
    
});
*/
require __DIR__.'/auth.php';
