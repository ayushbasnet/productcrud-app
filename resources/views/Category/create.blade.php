@extends('category.layout')
@section('title','Create')

@section('content')
 
<div class="card">
  <div class="card-header">Add A Category</div>
  <div class="card-body">
      
      <form action="{{ url('category') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="category_name" id="category_name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
   
  </div>
  
</div>
 
@endsection