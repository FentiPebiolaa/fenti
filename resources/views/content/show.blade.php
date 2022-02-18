@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>{{$product->name_content}}</li>
                    <li class="list-group-item"><b>url: </b>{{$product->url_content}}</li>
                    <li class="list-group-item"><b>icon: </b>{{$product->icon_content}}</li>
                    <li class="list-group-item"><b>Order Content: </b>{{$product->order_content}}</li>
                    <li class="list-group-item"><b>Type: </b>{{$product->type}}</li>
                    <li class="list-group-item"><b>status: </b>{{$product->status}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$product->description_content }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-2" href="{{ route('content.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection