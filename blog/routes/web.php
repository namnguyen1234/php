<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\logout;
use App\Http\Controllers\LogOut as ControllersLogOut;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Request\userrequest;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\LogoutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('register',[RegisterController::class,'show_register'])->name('show_dang_ki');
    Route::post('register', [registercontroller::class,'up_data_user'])->name('dang-ki');

    Route::prefix('login')->middleware('guest')->group(function(){
        Route::get('',[UserController::class,'index'])->name('login');
        Route::post('', [UserController::class,'login'])->name('dang-nhap');
        
    });

    Route::prefix('delete')->group(function(){
        Route::delete('/all',[UserController::class,'DeleteAll'])->name('deleteall');
        Route::delete('/{id}',[UserController::class,'Delete'])->name('delete');
    });

    Route::get('/admin',[UserController::class ,'admin'])->middleware('auth')->name('admin');
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    
    Route::get('edit/{id}',[UserController::class,'Edit'])->name('showedit');
    Route::post('edit/{id}',[UserController::class,'Update'])->name('edit');




