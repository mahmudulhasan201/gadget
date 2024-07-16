<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList(){
        return view('backend.pages.category.categoryList');
    }

    public function categoryForm(){
        return view('backend.pages.category.categoryForm');
    }

    
}

