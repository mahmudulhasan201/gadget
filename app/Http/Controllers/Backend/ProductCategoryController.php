<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    public function productCategoryList()
    {
        $productCategory = ProductCategory::all();
        return view('backend.pages.productCategory.productCategoryList', compact('productCategory'));
    }

    public function productCategoryForm()
    {
        return view('backend.pages.productCategory.productCategoryForm');
    }

    public function storeProductCategoryForm(Request $request)
    {
        $checkValidation = Validator::make($request->all(), [
            'product_name' => 'required',
            'category_name' => 'required',
            'discount' => ['required','numeric','min:1']
        ]);
        if ($checkValidation->fails()) {
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }


        ProductCategory::create([
            'product_name' => $request->product_name,
            'category_name' => $request->category_name,
            'discount' => $request->discount
        ]);
        notify()->success("Product Category Added Nicely.");
        return redirect()->back();
    }

    //Edit
    public function productCategoryEdit($id)
    {
        $editProductCategory = ProductCategory::find($id);
        return view('backend.pages.productCategory.editProductCategory', compact('editProductCategory'));
    }

    public function productCategoryUpdate(Request $request, $id)
    {
        $updateProductCategory = ProductCategory::find($id);
        $updateProductCategory->update([
                'product_name' => $request->product_name,
                'category_name' => $request->category_name,
                'discount' => $request->discount
            ]);
        notify()->success("Update Successful.");
        return redirect()->route('product.category.list');
    }

    //Delete
    public function productCategoryDelete($id)
    {
        $deleteProductCategory = ProductCategory::find($id);
        $deleteProductCategory->delete();

        notify()->success("Delete Successful.");
        return redirect()->back();
    }
}
