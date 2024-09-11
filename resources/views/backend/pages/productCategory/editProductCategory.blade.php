@extends("backend.master")

@section('content')
<div style="padding-left: 10px;">
    <form action="{{route('product.category.update',$editProductCategory->id)}}" method="post">
        @method('put')
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <h1><strong>Product Category Form</strong></h1><br>

                    <div class="form-group">
                        <label for="exampleFormControlInput1"><strong>Product Name</strong></label>
                        <input required value="{{$editProductCategory->product_name}}" name="product_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div><br>

                    <div class="form-group">
                        <label for="exampleFormControlInput1"><strong>Category Name</strong></label>
                        <input required value="{{$editProductCategory->category_name}}" name="category_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div><br>

                    <div class="form-group">
                        <label for=""><strong>Discount</strong></label>
                        <input required value="{{$editProductCategory->discount}}" name="discount" type="number" class="form-control" id="" placeholder="">
                    </div><br>

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection