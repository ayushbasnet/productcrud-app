@extends('product.layout')
@section('title','Create')

@section('content')
 
<div class="card">
  <div class="card-header">Add A Product</div>
  <div class="card-body">
      
      <form action="{{ url('product') }}" method="post">
        @csrf
        <label>Category</label></br>
        <input type="text" name="p_id" id="p_id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Created At:</label></br>
        <input type="date" name="created_at" id="created_at" class="form-control"></br>
        <label>Updated At:</label></br>
        <input type="date" name="updated_at" id="updated_at" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
   
  </div>
  
</div>
 
@endsection