@extends('frontend.article')
@section('article-content')				
				<div class="article-content">
					<img src="{{$imgs[0]}}">
					<p>{{$data->desc}}</p>
				</div>

@endsection