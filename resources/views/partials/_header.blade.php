<!-- header -->

<div class="agileits_header">
<div class="container">
	<div class="w3l_offers">
		<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
	</div>
	<div class="agile-login">
		<ul>
			<li><a href="{{route('register')}}"> Criar conta </a></li>
			<li><a href="{{route('login')}}">Entrar</a></li>
			<li><a href="{{route('contato')}}">Contato</a></li>
			
		</ul>
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
				<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
				
			</ul>
		</div>
		<div class="w3ls_logo_products_left">
			<h1><a href="{{route('home')}}">V-Shop</a></h1>
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
