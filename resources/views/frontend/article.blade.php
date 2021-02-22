@extends('frontend.master')
@section('content')
<div class="row">
	<div class="col span-9-of-12">
		<div class="article-border">
			<div class="article-title">
				<ul>
					<li class="title">{{$data->title}}</li>
					<li class="road">Anasayfa>Kategori</li>
				</ul>
			</div>
			<div class="article-main">
				<div class="article-nav">
					<ul>
						<li><a href="/article/{{$data->id}}">Açıklama</a></li>
						<li><a href="/article/gallery/{{$data->id}}">Resim&Video</a></li>
						<li><a href="/article/sysreq/{{$data->id}}">Sistem Gereksinimi</a></li>
					</ul>
				</div>
				@yield('article-content')
				<div class="article-link">
					<ul>
						<li><ion-icon name="tv"></ion-icon> 0 </li>
						<li><a href="#"><ion-icon name="arrow-down-circle"></ion-icon>İndir</a></li>
					</ul>
				</div>
			</div>
			<div class="article-footer">
				<div class="article-detail-title">
					<ul>
						<li>OYUN BİLGİLERİ</li>
						<li>{{ date('d F Y',strtotime($data->created_at))}}</li>
					</ul>
				</div>
				<div class="article-detail">
					<div class="article-detail-content">
						<div class="img">
							<img src="{{$imgs[0]}}">
						</div>
						<div class="detail">
							<ul>
								<li><span>Tür</span> : {{$data->category_id}}</li>
								<li><span>Platform</span> : {{$data->platform_id}}</li>
								<li><span>Boyut</span> : {{$data->size}}</li>
								<li><span>Crack</span> : {{$data->cracked_by}}</li>
								<li><span>Dil</span> : {{$data->language_id}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col span-3-of-12">
		<div class="category">
			<div class="category-title">
				<h3>Kategoriler</h3>
			</div>
			<div class="category-content">
				<ul class="category-items">
					@foreach($cats as $cat)
					<li><a href="/category/{{$cat->id}}"><ion-icon name="chevron-forward-outline"></ion-icon>{{$cat->title}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
