@extends('frontend.article')
@section('article-content')

<div class="article-gallery">
	<h3>Resimler</h3>
	@foreach($imgs as $key=>$img)
	@if($key=='0')
	@else
	<img src="{{$img}}">
	@endif
	@endforeach
	<h3>Videolar</h3>
	@foreach($vids as $vid)
	<iframe width="420" height="315"
	src="{{$vid}}">
	@endforeach
</iframe>
</div>

@endsection