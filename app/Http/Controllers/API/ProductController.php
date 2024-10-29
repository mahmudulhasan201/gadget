<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function stateless()
    {
        $product = Product::all();
        return $this->responseSuccess($product, 'all product');
    }

    public function restfull(Request $request)
    {
        $checkValidation = Validator::make($request->all(), [
            'product_name' => 'required',
            'product_quantity' => ['required', 'numeric', 'min:1'],
            'product_image' => 'required',
            'description' => 'required'
        ]);
        if ($checkValidation->fails()) {

            return $this->responseFailed($checkValidation->getMessageBag());

            $product = Product::create([
                'product_name' => $request->product_name,
                'product_quantity' => $request->product_quantity,
                'product_image' => $request->product_image,
                'product_description' => $request->description
            ]);
            return $this->responseSuccess($product, 'Product created successfully.');
        }
    }
    public function update(Request $request, $id)
    {

        $updateProduct = Product::find($id);
        $updateProduct->update([
            'product_name' => $request->product_name,
            'product_quantity' => $request->product_quantity,
            'product_image' => $request->product_image,
            'product_description' => $request->description
        ]);

        return $this->responseSuccess($updateProduct, 'product Updated Successfully');
    }
    public function delete($id)
    {
        $deleteProduct = Product::find($id)->delete();
        return $this->responseSuccess($deleteProduct, 'Product Deleted Successfully.');
    }
}
