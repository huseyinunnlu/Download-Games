@extends('frontend.master')
@section('content')


<div class="row">
	<section class="popular">
		<div class="popular-content">
			<div class="popular-item">
				<a href="#">
					<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
				</a>
			</div>
		</div>
	</section>

	<div class="row">
		<section class="games">
			<div class="col span-9-of-12">
				<div class="filter">
					<div class="sort">
						<ul class="sort-item">
							<li><a href="#"><ion-icon name="arrow-forward-circle-outline"></ion-icon>Yeni Eklenenler</a></li>
							<li><a href="#"><ion-icon name="arrow-forward-circle-outline"></ion-icon>En Çok Bakılanlar</a></li>
							<li class="search">
								<input type="search" name="search" placeholder="Search">
								<button>Ara</button>
							</li>
						</ul>
						<span>									
							<input type="search" name="search" placeholder="Search">
							<button>Ara</button>
						</span>
					</div>
				</div>
				<div class="game-show">
					<div class="row">
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span>Title</span>
									<span>0 Görüntülenme</span>
								</a>
							</div>
						</div>
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span class="title">Farmin Simulator 19 Platinum Edition</span>
									<span class="stats">0 Görüntülenme</span>
								</a>
							</div>
						</div>
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span>Title</span>
									<span>0 Görüntülenme</span>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span>Title</span>
									<span>0 Görüntülenme</span>
								</a>
							</div>
						</div>
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span class="title">Farmin Simulator 19 Platinum Edition</span>
									<span class="stats">0 Görüntülenme</span>
								</a>
							</div>
						</div>
						<div class="col span-1-of-3">
							<div class="game-show-content">
								<a href="">
									<img src="https://www.torrentoyunindir.com/wp-content/uploads/rdr2slide.jpg">
									<span>Title</span>
									<span>0 Görüntülenme</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col span-3-of-12">asd</div>
		</section>
	</div>

	@endsection