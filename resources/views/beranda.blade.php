@extends('layout.main')

@section('container')
  <center><h2 class="beranda">SELAMAT DATANG DI LAYANAN KEMENKES</h2> </center> 
  
<div class="style-1">
  <?php $i=0?>
  @foreach ($contents as $content)
    <div class="btn" data-toggle="modal" data-target="#exampleModal<?=$i?>">
      <a href="#" > </a>
        <img class="mb-3" align="center" src="{{ url('files/'.$content->icon_content)}}" id="image1">
        <br><span class="span1 mt-3">{{ $content->name_content }}</span>
    </div>

  <div class="modal fade" id="exampleModal<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title<?=$i?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <?php $i++ ?>
  @endforeach
</div>
  <div class="style-2">
   <a href="#" class="btn1"><span class="span2 mt-3">Hubungi Kami</span></a>
  </div>
  <div class="spacer"></div>
  
@endsection  
   