@extends('category.layout')
@section('title', 'Index')

@section('content')
    <a href="{{ url('/category/create') }}" class="btn btn-success btn-sm" title="Add New category">
        <i class="fa fa-plus" aria-hidden="true">
        </i>
         Add New
    </a>
    <br/>
    <br/>
    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td maxlength="10">{{ $item->description }}</td>
                                        <td>
                                        <a href="{{ url('/category/' . $item->id) }}" title="Show category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Show</button></a>
                                            <a href="{{ url('/category/' . $item->id.'/edit' ) }}" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-house" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa-sharp fa-regular fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
@endsection