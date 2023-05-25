@extends('product.layout')
@section('title','Show')
@section('content')
 
 
<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $product->product_name }}</h5>
        <p class="card-text">Price : {{ $product->price }}</p>
        <p class="card-text">Quantity : {{ $product->quantity }}</p>
        <p class="card-text">Description : {{ $product->description }}</p>
        <p class="card-text">Created At : {{ date('Y-m-d', strtotime($product->created_at));  }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection