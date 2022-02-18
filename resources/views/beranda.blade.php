@extends('layout.main')

@section('container')
  <center><h2 class="beranda">SELAMAT DATANG DI LAYANAN KEMENKES</h2> </center> 
  
  <div class="style-1">

  @foreach ($contents as $content)
    <div class="btn" >
      <a href="#" > </a>
        <img class="mb-3" align="center" src="{{$content->icon_content}}" id="image1">
        <br><span class="span1 mt-3">{{ $content->name_content }}</span>
    </div>
  @endforeach

  <div class="style-2">
   <a href="#" class="btn1"><span class="span2 mt-3">Hubungi Kami</span></a>
  </div>
  <div class="spacer"></div>
                              
@endsection  
   