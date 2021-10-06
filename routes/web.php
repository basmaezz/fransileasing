<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/conditions','frontend.conditions')->name('conditions');
Route::view('/dash','dashboard.admin.index');
Route::get('apply',[OrderController::class,'index'])->name('apply');
Route::get('getModel',[OrderController::class,'getModel'])->name('getModel');
Route::post('store-order',[OrderController::class,'store'])->name('store-order');
Route::get('getAll',[OrderController::class,'getAll'])->name('orders');
Route::get('index',[IndexController::class,'index'])->name('index');

Route::get('file-import-export', [OrderController::class, 'fileImportExport']);
Route::get('file-export', [OrderController::class, 'fileExport'])->name('file-export');
