<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ConditionController;

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
Route::view('/dash','dashboard.admin.index');
Route::get('apply',[OrderController::class,'index'])->name('apply');
Route::get('getModel',[OrderController::class,'getModel'])->name('getModel');
Route::post('store-order',[OrderController::class,'store'])->name('store-order');
Route::get('getAll',[OrderController::class,'getAll'])->name('orders');
Route::get('index',[IndexController::class,'index'])->name('index');
Route::get('file-import-export', [OrderController::class, 'fileImportExport']);
Route::get('file-export', [OrderController::class, 'fileExport'])->name('file-export');
Route::get('settings',[SettingController::class,'index'])->name('settings');
Route::get('conditions',[ConditionController::class,'index'])->name('conditions');
Route::post('store-conditions',[ConditionController::class,'store'])->name('store-conditions');
Route::get('view-conditions',[ConditionController::class,'getAll'])->name('view-conditions');
Route::get('edit-conditions',[ConditionController::class,'view'])->name('edit-conditions');
Route::get('create-conditions',[ConditionController::class,'create'])->name('create-conditions');
Route::patch('update-conditions',[ConditionController::class,'update'])->name('update-conditions');
Route::post('store-session',[SettingController::class,'store'])->name('store-session');
