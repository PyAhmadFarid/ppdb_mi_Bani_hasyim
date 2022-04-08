<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register',[SiswaController::class,'show_register'])->name('register');
    Route::post('/register',[SiswaController::class,'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::group(['middleware'=>'isadmin:1','prefix'=>'admin'],function(){

        Route::get('/',[AdminController::class,'show_dashboard'])->name('dashboard');
        Route::get('/siswa',[AdminController::class,'show_siswa'])->name('admin.siswa');
        Route::get('/siswa/detail/{id}',[AdminController::class,'show_detail_siswa'])->name('admin.siswa.detail');

        Route::post('/siswa/setstatus/{id}',[AdminController::class,'set_siswa_status'])->name('admin.siswa.status');
        Route::post('/siswa/apply',[AdminController::class,'apply'])->name('admin.siswa.apply');
    });

    Route::group(['middleware'=>'isadmin:0','prefix'=>'siswa'],function(){
        Route::get('/',[SiswaController::class,'show_data_diri'])->name('siswa');
        Route::post('/',[SiswaController::class,'save'])->name('siswa');
        Route::get('/export',[SiswaController::class,'export'])->name('export');
    });
});

Route::get('/', function () {
    return view('landing');
})->name('home');
