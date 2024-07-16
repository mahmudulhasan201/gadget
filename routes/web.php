<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;






//Backend

Route::get('/',[HomeController::class,'showHomepage'])->name('dashboard');

//Product
Route::get('/product/list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product/create/form',[ProductController::class,'productForm'])->name('product.form');
Route::get('/product/store/form',[ProductController::class,'storeForm'])->name('product.store.form');

//Category
Route::get('/category/list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::get('/category/store/form',[CategoryController::class,'storeForm'])->name('category.store.form');

//Product_Category
Route::get('/product/category',[ProductCategoryController::class,'productCategoryList'])->name('product.category.list');
Route::get('/product/category/form',[ProductCategoryController::class,'productCategoryForm'])->name('product.category.form');