@extends('main')
@section('conteudo')
	@include('partials._header_loja')
	@include('partials._breadcrumbs', ['pagina' => "Leilões"])

		<div class="container">

			<br>

	@foreach($leiloes as $leilao)

		<div class="panel panel-default">
	  	<!-- Default panel contents -->
		  <div class="panel-heading">{{$leilao->protocolo." | ".\App\User::find($leilao->id_user)->name." | ".\App\User::find($leilao->id_user)->email}} em {{date('d/m/Y H:i', strtotime($leilao->created_at))}}</div>
		  <div class="panel-body">

		   <p>Produto: {{\App\Produto::find($leilao->id_produto)->nome_produto. " - ".\App\Produto::find($leilao->id_produto)->description}}</p>


			<img style="float:right" src="images/produtos/{{\App\Produto::find($leilao->id_produto)->imagem}}" alt=" " class="img-responsive" />

		   <p>Valor original: ${{money_format('%(#10n',\App\Produto::find($leilao->id_produto)->valor_unitario)}}</p>
		   <p>Lance: ${{money_format('%(#10n',$leilao->lance)}}</p>
		   <p>Diferença: ${{money_format('%(#10n',\App\Produto::find($leilao->id_produto)->valor_unitario - $leilao->lance)}}</p>
		   <p>Porcentagem do desconto: {{money_format('%(#10n',(\App\Produto::find($leilao->id_produto)->valor_unitario - $leilao->lance)*100/\App\Produto::find($leilao->id_produto)->valor_unitario)}}%</p>



		  </div>
		    <div class="panel-footer">
		   	<button class="btn btn-primary"> Deferir </button>
		   	<button class="btn btn-warning"> Indeferir </button>
		   </div> 


		</div>

		@endforeach

			@if(count($leiloes) == 0)
				<h1 class="text-center" style="padding-bottom: 5%">Nenhum lance pendente</h1>
			@endif

		{{$leiloes->links()}}

	</div>
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
