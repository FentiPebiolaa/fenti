@extends('layouts.main')

@section('container')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left">
                <h2>Data Content</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('content.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($content as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name_content }}</td>
            <td>{{ $product->order_content }}</td>
            <td>
                <form action="{{ route('content.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('content.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('content.edit', $product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$content->links()}}
</div>
@endsection
