@extends('backend.master')

@section('content')

<h1>Product Category List</h1>
<div><a href="{{route('product.category.form')}}" class="btn btn-primary">Add New Product Category</a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Discount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($productCategory as $data)
      <th>{{$data->id}}</th>
      <td>{{$data->product_name}}</td>
      <td>{{$data->category_name}}</td>
      <td>{{$data->discount}}%</td>
      <td>
        <a href="{{route('product.category.edit',$data->id)}}" type="button" class="btn btn-success">Edit</a>
        <a href="{{route('product.category.delete',$data->id)}}" type="button" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection