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
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<h3><a href="products.html">V-Shop</a></h3>
			</div>
			<div class="agile-login">
				<ul>
					<!--<li><a href="registered.html"> Criar Conta </a></li>-->
					<li><a href="login.html">Sair</a></li>
					<li><a href="contact.html">Contato</a></li>	
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<!-- <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li> -->
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left" >
				<h1><a href="index.html" style="color: #33cccc;">Nome da Loja</a></h1>
			</div>
		<!-- <div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Procure por um produto..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div> -->
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits" style="background-color: #33cccc;">
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
									<li class="active"><a href="loja.html" class="act">Principal</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
									<li class="active"><a href="lojaPrdtAdd.html" class="act">Adicionar produtos</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
									<li class="active"><a href="lojaPrdtLista.html" class="act">Lista de produtos</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
									<li class="active"><a href="lojaHistoricoVendas.html" class="act">Histórico de vendas</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">	
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Principal</a></li>
				<li class="active">Nome da Loja</li>
				<li class="active">Adicionar Produtos</li>
			</ol>
		</div>
	</div>

<!-- //Jumbotron -->
	<div class="container" style="padding-bottom: 20px;">
		 <!-- //form para adicionar os itens -->
		 <form>
			<div class="form-group">
			  <label for="nome do item" >Produto</label>
			  <input type="text" class="form-control" id="nome" placeholder="Produto">
			</div>
			<div class="form-group">
				<label for="preço">Preço</label>
				<input type="text" class="form-control" id="preco" placeholder="Preço">
			 </div>
			 <div class="form-group">
				<label for="nome do item" >Código</label>
				<input type="text" class="form-control" id="code" placeholder="Código">
			 </div>
			<div class="form-group">
				<label for="nome do item" >Categoria</label>
				<input type="text" class="form-control" id="categoria" placeholder="Categoria">
			</div>
			<div class="form-group">
				<label for="nome do item" >Quantidade</label>
				<input type="text" class="form-control" id="quantidade" placeholder="Quantidade">
			</div>
			<div class="form-group">
			  <label for="descricao">Descrição</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição "></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Imagem do produto(150x150 pixels)</label>
				<input type="file" class="form-control-file" id="imgProduto" placeholder="imagem do produto">
			 </div>
			 <button type="submit" class="btn btn-primary" data-toggle="" data-target="">Adicionar</button>
			 <!-- <a class="btn btn-primary" href="#confirm" role="button">Adicionar</a> -->
		 </form>
		 <!-- //form para adicionar os itens -->
	</div>
 </div>
 <!-- //Jumbotron -->
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
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal Care</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged Foods</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Perfil</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">Carrinho</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Entrar</a></li>
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