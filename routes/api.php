<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/get-all-product',[ProductController::class,'stateless']);
Route::post('/create-product',[ProductController::class,'restfull']);
Route::post('/update-product/{id}',[ProductController::class,'update']);
Route::get('/delete-product/{id}',[ProductController::class,'delete']);