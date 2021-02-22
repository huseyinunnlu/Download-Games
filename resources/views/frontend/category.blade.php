@extends('frontend.master')
@section('content')
<div class="row">
	<section class="popular">
		<div class="popular-content">
			@foreach($index as $pop)
			@php($indeximg = explode(',' ,$pop->images))
			<div class="popular-item">
				<a href="/article/{{$pop->id}}">
					<img src="{{$indeximg[0]}}">
				</a>
			</div>
			@endforeach
		</div>
	</section>

	<div class="row">
		<section class="games">
			<div class="col span-9-of-12">
				<div class="filter">
					<form action="{{url('/sortcat')}}" method="post">
						{{@csrf_field()}}
						<div class="sort">
							<ul class="sort-item">
								<li>
									<select name="sorts">
										<option value="0">Sıralayın</option>
										<option value="1">Tarih(Artan)</option>
										<option value="2">Tarih(Azalan)</option>
										<option value="3">En Çok Görüntüleme alanlar</option>
									</select>
								</li>
								<li class="search">
									<input type="search" name="search" placeholder="Search">
									<button>Ara</button>
								</li>
							</div>
						</form>
					</div>
					<div class="game-show">
						<div class="row">
							@foreach($data as $post)
							@php($img = explode(',' ,$post->images))
							<div class="col span-1-of-3">
								<div class="game-show-content">
									<a href="{{url('article')}}/{{$post->id}}">
										<img src="{{$img[0]}}">
										<span>{{$post->title}}</span>
										<span>0 Görüntülenme</span>
									</a>
								</div>
							</div>
							@endforeach
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

			</section>
		</div>
		@endsection
