<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\WebHomeController;
use Illuminate\Support\Facades\Route;


//Backend

Route::group(['prefix' => 'admin'], function(){ 

Route::get('/',[HomeController::class,'showHomepage'])->name('dashboard');

//Product
Route::get('/product/list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/form',[ProductController::class,'storeProductForm'])->name('product.store.form');

Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'productUpdate'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');

//Category
Route::get('/category/list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category/form',[CategoryController::class,'storeCategoryForm'])->name('category.store.form');

Route::get('/category/edit/{id}',[CategoryController::class,'categoryEdit'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'categoryUpadte'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'categoryDelete'])->name('category.delete');

//Product_Category
Route::get('/product/category/list',[ProductCategoryController::class,'productCategoryList'])->name('product.category.list');
Route::get('/product/category/form',[ProductCategoryController::class,'productCategoryForm'])->name('product.category.form');
});

//Frontend

Route::get('/',[WebHomeController::class,'home'])->name('home');