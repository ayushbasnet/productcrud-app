@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('edit')}}" method="post">
        @csrf
        
        <input type="hidden" name="id" id="id"  id="id" value="{{$product->id}}"/>
        <label>Name</label></br>
        <input type="text" name="name" id="name"  class="form-control" value="{{$product->name}}"> </br>
        <label>Company</label></br>
        <input type="text" name="address" id="address"  class="form-control" value="{{$product->company}}"></br>
        <label>Price</label></br>
        <input type="text" name="mobile" id="mobile"  class="form-control"value="{{$product->price}}"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop

