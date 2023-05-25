@extends('layout')
@section('title','Create')

@section('content')
 
<div class="card">
  <div class="card-header">Add A Product</div>
  <div class="card-body">
      
      <form action="{{ url('create') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Company</label></br>
        <input type="text" name="company" id="company" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection