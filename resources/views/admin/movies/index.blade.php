@extends('layouts.admin.index')

@section("content")
	@inject('image', 'Tmdb\Helper\ImageHelper')
	<article class="row">
		@foreach ($movies as $movie)
			<div class="col-md-2" style="width: 260px; height: 420px">
	    			{!! $image->getHtml($movie->getPosterImage(), 'w154', 260, 420) !!}
    			</div>
		@endforeach
	</article>
	
@endsection