<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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
Route::prefix('admin')->name('admin.')->middleware('auth','permission')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::group(['as'=>'admin.category.','prefix'=>'admin/category/'], function(){
    Route::get('table',[CategoryController::class, 'table'])->name('table');
    Route::get('create',[CategoryController::class, 'create'])->name('create');
    Route::post('store',[CategoryController::class, 'store'])->name('store');
    Route::get('edit/{id}',[CategoryController::class, 'edit'])->name('edit');
    Route::patch('update/{id}',[CategoryController::class, 'update'])->name('update');
    Route::post('delete/',[CategoryController::class, 'delete'])->name('delete');
});
Route::group(['as'=>'admin.product.','prefix'=>'admin/product/'], function(){
    Route::get('table',[ProductController::class, 'table'])->name('table');
    Route::get('create',[ProductController::class, 'create'])->name('create');
    Route::post('store',[ProductController::class, 'store'])->name('store');
    Route::get('edit/{id}',[ProductController::class, 'edit'])->name('edit');
    Route::patch('update/{id}',[ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}',[ProductController::class, 'delete'])->name('delete');
});
