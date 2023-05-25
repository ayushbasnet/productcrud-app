@extends('product.layout')
@section('title','Update')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('product' . '/' . $product->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control" value="{{$product->product_name}}"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}"></br>
        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control" value="{{$product->quantity}}"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control" value="{{$product->description}}"></br>
        <label>Created At:</label></br>
        <input type="date" name="created_at" id="created_at" class="form-control" value="{{$product->created_at}}"></br>
        <label>Updated At:</label></br>
        <input type="date" name="updated_at" id="updated_at" class="form-control" value="{{$product->updated_at}}"></br>

        <button type="submit"class="btn btn-success">Update</button></br>
    </form>
   
  </div>
</div>
 
@stop

