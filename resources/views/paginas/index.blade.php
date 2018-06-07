
@extends('main')

@section('title', "Vshop")

@section('conteudo')
@include('partials._header_busca')
@include('partials._navigation')

<body>
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/banner1.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3></h3>
				</div>
			</li>
			<li>
				<img src="images/banner2.jpg" alt="" />
				  <div class="slide-desc">
					<h3></h3>
				</div>
			</li>

			<li>
				<img src="images/banner3.jpg" alt="" />
				<div class="slide-desc">
					<h3></h3>
				</div>
			</li>

			<li>
				<img src="images/11.jpg" alt="" />
				<div class="slide-desc">
					<h3></h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	@include('partials._lojas')
@endsection
