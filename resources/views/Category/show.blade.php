@extends('category.layout')
@section('title','Show')
@section('content')
 
 
<div class="card">
  <div class="card-header">Category Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $category->category_name }}</h5>
        <p class="card-text">Description : {{ $category->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection