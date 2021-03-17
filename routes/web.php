<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//fontend 
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);


//backend
Route::group(['prefix' => 'admin'],function(){
    Route::get('/login',[\App\Http\Controllers\AdminController::class,'login']);
    Route::get('/show-dashboard',[\App\Http\Controllers\AdminController::class,'show_dashboard']);
    //Route::post('/index',[\App\Http\Controllers\AdminController::class,'dashboard']);
    // Route::post('admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
});
//Route::get('admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
Route::post('admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);