<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;






//Backend

Route::get('/',[HomeController::class,'showHomepage'])->name('dashboard');

Route::get('/product/list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product/create/form',[ProductController::class,'productForm'])->name('product.form');
Route::get('/product/store/form',[ProductController::class,'storeForm'])->name('store.form');