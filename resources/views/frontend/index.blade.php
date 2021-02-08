@extends('frontend.master')
@section('content')
<div class="row">
	<section>
		<div class="trend">
			<ul class="trend-item">
				<li><a href="#"><img src="https://i.hizliresim.com/wUy28z.jpg"></a></li>
			</ul>
		</div>
	</section>
	<div class="row">
		<div class="col-9">
			<section class="games-show">
				<div class="games-title">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="games-main">
					<div class="games-content">
						
					</div>
				</div>
			</section>	
		</div>
		<div class="col-3">
			<section class="games-category col-3">
				<div class="games-title"></div>
				<div class="games-main">
					<div class="games-content">

					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<style type="text/css">
	.trend {
		height: auto;
		margin: 30px 0;
		background-color: #3E3E3E;
		border-radius: 5px;
	}

	.trend-item img {
		width: 150px;
		height: 210px;
	}

	.trend-item li {
		border-radius: 3px;
		padding: 5px 5px 0 5px;
		border-bottom: 0px;
		background-color: gray;
		margin: 10px 0;
		
	}

	.trend-item {
		display: flex;
		align-items: center;
		justify-content: space-around;
	}
</style>
@endsection