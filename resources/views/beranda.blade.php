@extends('layout.main')

@section('container')
  <center><h2 class="beranda">SELAMAT DATANG DI LAYANAN KEMENKES</h2> </center> 
  
<div class="style-1">
  <?php $i=0?>
  @foreach ($contents as $content)
    @if($content->kategori == '1')
    <a href="{{ $content->url_content }}" > 
    <div class="btn">
      <img class="mb-3" align="center" src="{{ url('files/'.$content->icon_content)}}" id="image1">
        <br><span class="span1 mt-3">{{ $content->name_content }}</span>
    </div>
    </a>
    @else
    <div class="btn" data-toggle="modal" data-target="#exampleModal<?=$i?>">
      <a href="#" > </a>
        <img class="mb-3" align="center" src="{{ url('files/'.$content->icon_content)}}" id="image1">
        <br><span class="span1 mt-3">{{ $content->name_content }}</span>
    </div>
    @endif

  <div class="modal fade" id="exampleModal<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
        {!! $content->description_content !!}
        </div>
  
        <div class="modal-footer">
        <div class="style-3">
          <a href="#" class="btn2" data-dismiss="modal" ><span class="span2 mt-3">CLOSE</span></a>
        </div>
        <div class="style-3">
          @if ($content->nama_link != '')
          <a href="{{ $content->url_content }}" class="btn2"><span class="span2 mt-3">{{ $content->nama_link }}</span></a>
          
          @endif
          
          @if ($content->nama_link2 != '')
          <a href="{{ $content->url_content2 }}" class="btn2"><span class="span2 mt-3">{{ $content->nama_link2 }}</span></a>
          @endif 
        </div>
        <div class="spacer"></div>
       </div>
      </div>
    </div>
  </div>
  <?php $i++ ?>
  @endforeach
</div>
  <div class="style-2">
   <a href="" class="btn1"><span class="span2 mt-3">Hubungi Kami</span></a>
  </div>
  <div class="spacer"></div>
  
@endsection  
   