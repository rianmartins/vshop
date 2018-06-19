<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Registered :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
// Função para mostrar os menus
	function Mudarestado(el) {
	let display = document.getElementById(el).style.display;
	let id = ["lojaAdd", "lojaList"];
	for(i = 0; i < id.length; i++) {
		if(id[i] != el)
		{
			document.getElementById(id[i]).style.display = 'none';
		}
	}
	if(display == "none")
		document.getElementById(el).style.display = 'block';
	else
		document.getElementById(el).style.display = 'none';
	}
	
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
<div class="agileits_header">
	<div class="container">
		<div class="w3l_offers">
			<p>VENDA ATÉ 70% OFF. CÓDIGO DE USO "SALE70%". <a href="products.html">APROVEITE</a></p>
		</div>
		<div class="agile-login">

			@guest
						<li><a href="{{route('register')}}"> Criar conta </a></li>
						<li><a href="{{route('login')}}">Entrar</a></li>
					@else

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{route('logout')}}"  onclick="event.preventDefault();
			                                                     document.getElementById('logout-form').submit();">Sair</a></li>


											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								                @csrf
								            </form>
										</ul>
									</div>
								</div>
							</ul>
						</li>

			    @endguest

		</div>
		<div class="product_list_header">  
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="logo_products">
	<div class="container">
	<div class="w3ls_logo_products_left1">
			<ul class="phone_email">
				<li><i class="fa fa-phone" aria-hidden="true"></i>Encomende online ou ligue-nos : (+0123) 234 567</li>
				
			</ul>
		</div>
		<div class="w3ls_logo_products_left">
			<h1 id="vLogo"><a href="index.html">V-Shop</a></h1>
		</div>
	<div class="w3l_search">
		<form action="#" method="post">
			<input type="search" name="Search" placeholder="Procure por um produto..." required="">
			<button type="submit" class="btn btn-default search" aria-label="Left Align">
				<i class="fa fa-search" aria-hidden="true"> </i>
			</button>
			<div class="clearfix"></div>
		</form>
	</div>
		
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits" id="menu1" style="background-color: #00cc66;">
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
									<!-- <li class="active"><a href="#prdtAdd" onclick="Mudarestado('prdtAdd')" class="act">Principal</a></li>	 -->
									<li class="active"><a href="#" onclick="Mudarestado('lojaAdd')" class="act">Adicionar Loja</a></li>	
									<li class="active"><a href="#" onclick="Mudarestado('lojaList')" class="act">Lista de Lojas</a></li>
									<li class="active"><a href="{{route('contatos.index')}}" onclick="Mudarestado('lojaList')" class="act">Contatos</a></li>	
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs" id="brd-1">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Principal</a></li>
				<li class="active">Nome da Loja</li>
				<li class="active">Adicionar Loja</li>
			</ol>
		</div>
	</div>

<!-- //Adicionar Lojas -->
<div class="container" id="lojaAdd">
	<!-- //form para adicionar os itens -->
	<form style="align-content: center;">
	  <div class="form-group">
		 <label for="nome do item"></label>
		 <input type="text" class="form-control" id="nome_loja" name="nome_loja" placeholder="Nome da Loja" style="width: 300px;">
	  </div>
	  <div class="form-group">
		<label for="nome do item"></label>
		<input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" placeholder="Proprietário/Responsável" style="width: 300px;">
	 </div>
	  <div class="form-group">
		  <label for="nome do item" ></label>
		  <input type="text" class="form-control" id="categoria_loja" name="categoria_loja" placeholder="Tipo de Loja" style="width: 300px;">
	  </div>
	  <div class="form-group">
		  <label for="nome do item" ></label>
		  <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" style="width: 250px;">
		</div>
	  <div class="form-group">
		  <label for="nome do item"></label>
		  <input type="text" class="form-control" id="endereco_comercial" name="endereco_comercial" placeholder="Endereço Comercial" style="width: 250px;">
		</div>
	  <div class="form-group">
		  <label for="nome do item" ></label>
		  <input type="text" class="form-control" id="website" name="website" placeholder="Website" style="width: 250px;">
	  </div>
	  <div class="form-group">
		<label for="nome do item" ></label>
		<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" style="width: 250px;">
	  </div>
	  <div class="form-group">
		<label for="nome do item" ></label>
		<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone Comercial" style="width: 250px;">
	  </div>
	  <!-- <div class="form-group">
		 <label for="descricao"></label>
		 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição" style="width: 580px; height: 200px;"></textarea>
	  </div> -->
	  <div class="form-group">
		  <label for="exampleFormControlFile1">Logo da loja(150x150 pixels)</label>
		  <input type="file" class="form-control-file" name="imgProduto" id="imgProduto">
		</div>
		<button type="submit" class="btn btn-primary" data-toggle="" data-target="" style="margin-bottom: 20px;">Adicionar</button>
		<!-- <a class="btn btn-primary" href="#confirm" role="button">Adicionar</a> -->
	</form>
	<!-- //form para adicionar os itens -->
</div>
</div>
<!-- //Adicionar Lojas -->

<!-- //Lista de Lojas -->
<div class="container" id="lojaList" style="padding-bottom: 20px; display: none;">
	<!-- //form para adicionar os itens -->
	<table class="table table-bordered" style="width: 700px;">
		  <thead class="thead-dark">
			 <tr class="bg-info" style="color: #eafafa; background: #00cc66;">
				<th scope="col">id</th>
				<th scope="col">Nome</th>
				<th scope="col">Tipo</th>
				<th scope="col" style="text-align: center; vertical-align: middle;">Editar</th>
				<th scope="col" style="text-align: center; vertical-align: middle;">Remover</th>
			 </tr>
		  </thead>
		  <tbody>
			<tr style="background: #66ffb3">
				<th scope="row">1</th>
				<td>InfoBit</td>
				<td>Informática</td>
				<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-info">Editar</button></td>
				<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-warning">Remover</button></td>
			</tr>
			
			<tr style="background: #66ffb3">
				<th scope="row">2</th>
				<td>Visual Mega</td>
				<td>Roupas</td>
				<td style="text-align: center; vertical-align: middle;" ><button type="button" class="btn btn-info">Editar</button></td>
				<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-warning">Remover</button></td>
			</tr>

			<tr style="background: #66ffb3">
				<th scope="row">3</th>
				<td>Bolsomito Defense</td>
				<td>Armas</td>
				<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-info">Editar</button></td>
				<td style="text-align: center; vertical-align: middle;"><button type="button" class="btn btn-warning">Remover</button></td>
			</tr>
		  </tbody>
		  
		</table>
	<!-- //form para adicionar os itens -->
</div>
</div>
<!-- //Lista de Lojas -->

<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                  <h3>Contato</h3>
                  
                  <ul class="address">
                     <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                     <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                     <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                  </ul>
               </div>
               <div class="col-md-3 w3_footer_grid">
                  <h3>Informação</h3>
                  <ul class="info"> 
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">Sobre</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contato </a></li>
                  </ul>
               </div>
               <div class="col-md-3 w3_footer_grid">
                  <h3>Categorias</h3>
                  <ul class="info"> 
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Mantimentos</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Casa</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Cuidado pessoal</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Alimentos embalados</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Bebidas</a></li>
                  </ul>
               </div>
               <div class="col-md-3 w3_footer_grid">
                  <h3>Perfil</h3>
                  <ul class="info"> 
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">Carrinho</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Sair</a></li>
                     <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Criar Conta</a></li>
                  </ul>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
		
		<div class="footer-copy">
			
            <div class="container">
               <p>© 2018 V-Shop. Trending Systems Integrated | <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
         </div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>
