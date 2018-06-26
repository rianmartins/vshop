<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>vShop</title>
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

@include('partials._header')
@include('partials._navigation')

@include('partials._breadcrumbs', ['pagina' => "Checkout"])

<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h2>Seu carrinho contém: <span>3 Produtos</span></h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Código</th>	
							<th>Imagem</th>
							<th>Quantidade</th>
							<th>Produto</th>
						
							<th>Preço</th>
							<th>Remover</th>
						</tr>
					</thead>
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="single.html"><img src="images/1.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Sal Boa Vida</td>
						
						<td class="invert">$290.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
					<tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Óleo de girassol Maria</td>
					
						<td class="invert">$250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
					<tr class="rem3">
						<td class="invert">3</td>
						<td class="invert-image"><a href="single.html"><img src="images/3.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Açucar Diabetes</td>
						
						<td class="invert">$15.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close3"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close3').on('click', function(c){
									$('.rem3').fadeOut('slow', function(c){
										$('.rem3').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Finalizar Compra</h4>
					<ul>
						<li>Produto 1 <i>-</i> <span>$15.00 </span></li>
						<li>Produto 2<i>-</i> <span>$25.00 </span></li>
						<li>Produto 3<i>-</i> <span>$29.00 </span></li>
						<!-- <li>Preço Total <i>-</i> <span>$15.00</span></li> -->
						<li>Total <i>-</i> <span>$84.00</span></li>
					</ul>
				</div>
				<div class="checkout-right-basket">
					<a href="single.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Comprando</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->
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
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">Sobre nós</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contate-Nos</a></li>
						<!-- <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.html">Códigos Curtos</a></li> -->
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Produtos especiais</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Mantimentos</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Casa</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Cuidado pessoal</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Alimentos embalados</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Bebidas</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">Meu carrinho</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Entrar</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Criar Conta</a></li>
					</ul>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2018 vShop. Todos os direitos reservados. <a href="http://w3layouts.com/">W3layouts</a></p>
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
