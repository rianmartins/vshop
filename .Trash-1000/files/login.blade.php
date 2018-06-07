@extends('main')

@section('conteudo')
		
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Entrar</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form>
					<div id="login-options" style="height: 50px;"> 
						<label class="radio-inline" style="color: chocolate;"><input type="radio" name="optradio">Cliente</label>
						<label class="radio-inline" style="color: #33cccc;"> <input type="radio" name="optradio">Loja</label>
						<label class="radio-inline" style="color: #00cc66;"><input type="radio" name="optradio">Root Admin</label>
					</div>
					<input type="email" placeholder="Endereço de E-mail" required=" " >
					<input type="password" placeholder="Senha" required=" " >
					<div class="forgot">
						<a href="#">Esqueceu sua senha ?</a>
					</div>
					<input type="submit" value="Entrar">
				</form>
			</div>
			<h4>Ainda não é registrado ?</h4>
			<p><a href="registered.html">Registre-se aqui</a>ou volte para a tela principal <a href="index.html">Principal<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>

<!-- //login -->
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

@endsection