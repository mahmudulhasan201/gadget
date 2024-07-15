<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        return view('backend.pages.product.productList');
    }


    public function productForm(){
        return view('backend.pages.product.productForm');
    }

    public function storeForm(){
        return view();
    }
}
