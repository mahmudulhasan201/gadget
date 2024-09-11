<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productList()
    {
        $product = Product::all();
        return view('backend.pages.product.productList', compact('product'));
    }


    public function productForm()
    {
        return view('backend.pages.product.productForm');
    }

    public function storeProductForm(Request $request)
    {
        $checkValidation = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_quantity' => ['required', 'numeric', 'min:1'],
            'product_image' => 'required',
            'description' => 'required'
        ]);
        if ($checkValidation->fails()) {
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }

        Product::create([
            'product_name' => $request->product_name,
            'product_quantity' => $request->product_quantity,
            'product_image' => $request->product_image,
            'product_description' => $request->description
        ]);
        notify()->success("Product Added Successfully.");
        return redirect()->back();
    }

    //Edit
    public function productEdit($id)
    {
        $editProduct = Product::find($id);
        return view('backend.pages.product.editProduct', compact('editProduct'));
    }

    public function productUpdate(Request $request, $id)
    {
        $checkValidation = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_quantity' => ['required', 'numeric', 'min:1'],
            'product_image' => 'required',
            'description' => 'required'
        ]);
        if ($checkValidation->fails()) {
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }

        $updateProduct = Product::find($id);
        $updateProduct->update([
            'product_name' => $request->product_name,
            'product_quantity' => $request->product_quantity,
            'product_image' => $request->product_image,
            'product_description' => $request->description
        ]);
        notify()->success("Update Successsful.");
        return redirect()->route('product.list');
    }



    //Delete
    public function productDelete($id)
    {
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();

        notify()->success("Delete Successsful.");
        return redirect()->back();
    }
}
