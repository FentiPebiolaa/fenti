@extends('layout/main')

@section('container')

 
	<h1 class="mb-5">{{ $abouts->title }}</h1>


	<p> By. fentiPebiola in programming</p>

	{!! $abouts->body !!}


	
<a href="/about">Back to about</a>

@endsection


