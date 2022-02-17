
@extends('layout.main')

@section('container')

@foreach ($about as $abouts)
	<article class="mb-5">
		<h2>
			<a href="/about/{{ $abouts->slug }}">{{ $abouts->title}}</a>
		</h2>
		<p>{{ $abouts->excerpt }}</p>
	</article>
@endforeach 

@endsection  
   
