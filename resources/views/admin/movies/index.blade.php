@extends('layouts.admin.index')

@section("content")
	@inject('image', 'Tmdb\Helper\ImageHelper')

	@foreach ($movies as $movie)
	    {!! $image->getHtml($movie->getPosterImage(), 'w154', 260, 420) !!}
	@endforeach
	
@endsection