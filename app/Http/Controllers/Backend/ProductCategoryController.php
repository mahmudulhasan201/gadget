<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function productCategoryList(){
        return view('backend.pages.productCategory.productCategoryList');
    }

    public function productCategoryForm(){
        return view('backend.pages.productCategory.productCategoryForm');
    }
}
