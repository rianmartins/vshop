@extends('main')
@section('conteudo')
@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => "Compras"])

    <div class="container">

        <br>

	@foreach($compras as $compra)

		<div class="panel panel-danger">
	  	<!-- Default panel contents -->
		  <div class="panel-heading">{{$compra->protocolo." | ".$compra->cliente}} em {{date('d/m/Y H:i', strtotime($compra->created_at))}}</div>
		  <div class="panel-body">

		  	@php
		  		$descricoes = explode(";", $compra->descricao);
		  	@endphp

		  	@foreach($descricoes as $descricao)
		    	<p>{{$descricao}}</p>
		  	@endforeach

		  </div>
		   <div class="panel-footer">Valor Total: $ {{money_format('%(#10n', $compra->total)}}
		   	<br><br>
		   	<button class="btn btn-primary"> Aprovar </button>
		   </div> 


		</div>

    @endforeach

    @if(count($compras) == 0)
        <h1 class="text-center" style="padding-bottom: 5%">Nenhuma compra pendente</h1>
    @endif


		{{$compras->links()}}

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
