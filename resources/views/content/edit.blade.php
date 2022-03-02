@extends('layouts.main')

@section('container')
<div class="container">    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('content.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('content.update', $product->id) }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name_content" class="form-control" placeholder="Name" value="{{ $product->name_content }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div  class="form-group">
                    <strong>kategori:</strong>
                    <select class="form-control" name="kategori" value="{{ $product->name_content }}">
                    <option value="0">internal</option>
                    <option value="1">External</option>
                    </select> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>url:</strong>
                    <input type="text" name="url_content" class="form-control" placeholder="Url link" value="{{ $product->url_content }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama link:</strong>
                    <input type="text" name="nama_link" class="form-control" placeholder="Url link" value="{{ $product->nama_link }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>url link ke 2:</strong>
                    <input type="text" name="url_content2" class="form-control" placeholder="Url link ke 2" value="{{ $product->url_content }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama button ke 2:</strong>
                    <input type="text" name="nama_link2" class="form-control" placeholder="nama_link ke 2" value="{{ $product->nama_link2 }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>icon:</strong>
                    <input type="file" name="icon_content" class="form-control @error('icon_content') is-invalid @enderror" placeholder="Icon Content">
                @error('icon_content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror   
                </div> 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Name" value="{{ $product->status }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Order Content::</strong>
                    <input type="text" name="order_content" class="form-control" placeholder="Name" value="{{ $product->order_content }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description_content" placeholder="Detail" id=konten >{{ $product->description_content }}</textarea > 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
</div>
@endsection
@section('js_here')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection
