@extends('product.layout')
@section('title', 'Index')

@section('content')
    <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New Product">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>
    <br/>
    <br/>
    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ date('Y-m-d', strtotime($item->created_at)); }}</td>
                                        <td>
                                        <a href="{{ url('/product/' . $item->id) }}" title="Show Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                            <a href="{{ url('/product/' . $item->id.'/edit' ) }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
@endsection