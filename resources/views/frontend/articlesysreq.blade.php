@extends('frontend.article')
@section('article-content')

<div class="article-sysreq">
	<h3>Sistem Gereksinimleri</h3>
	<p>
		{{$data->systemreq}}
	</p>

</div>

@endsection