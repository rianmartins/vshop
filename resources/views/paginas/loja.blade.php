@extends('main')
@section('conteudo')
@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => "Adicionar Produto"])
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
@endsection
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
