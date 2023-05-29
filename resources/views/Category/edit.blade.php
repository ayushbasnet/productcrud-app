@extends('category.layout')
@section('title','Update')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('category' . '/' . $category->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Name</label></br>
        <input type="text" name="category_name" id="category_name" class="form-control" value="{{$category->category_name}}"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control" value="{{$category->description}}"></br>

        <button type="submit"class="btn btn-success">Update</button></br>
    </form>
   
  </div>
</div>
 
@stop

