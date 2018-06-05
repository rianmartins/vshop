
<!-- navigation -->
<div class="navigation-agileits">
<div class="container">
	<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('home')}}" class="act">Principal</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="multi-gd-img">
											<ul class="multi-column-dropdown">
												<h6>Todas as Categorias</h6>
												{{--<li class="dropdown-sub">--}}
													{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown-sub">Sub-menu<b class="caret"></b></a>--}}
													{{--<ul class="dropdown-menu multi-column columns-3">--}}
														{{--<div class="row">--}}
															{{--<div class="multi-gd-img">--}}
																{{--<ul class="multi-column-dropdown">--}}
																	{{--<li><a href="#">Sub1</a></li>--}}
																	{{--<li><a href="#">Sub2</a></li>--}}
																{{--</ul>--}}
															{{--</div>--}}
														{{--</div>--}}
													{{--</ul>--}}
												{{--</li>--}}
												<li><a href="#">Mercado</a></li>
												<li><a href="#">Casa & Cozinha</a></li>
												<li><a href="#">Higiente Pessoal</a></li>
												<li><a href="#">Comida</a></li>
												<li><a href="#">Bebidas</a></li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
							<li><a href="{{route('ofertas')}}">Ofertas</a></li>
							<li><a href="{{route('contato')}}">Contato</a></li>
						</ul>
					</div>
					</nav>
	</div>
</div>

<!-- //navigation -->
