
@section('scripts')

@endsection

<!-- header -->

<div class="agileits_header">
<div class="container">

	@if(Route::currentRouteName() != "ofertas")
		<div class="w3l_offers">
			<p><a href="{{route('ofertas')}}">COMPRE AGORA!</a></p>
		</div>

	@else

		<div class="w3l_offers">
				<p><a style="cursor: pointer;" onclick = "preparaCompra()"> FINALIZAR COMPRA</a> </p>
		</div>

	@endif

	<div class="agile-login">
		<ul>
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

			<li><a href="{{route('contatos.create')}}">Contato</a></li>
			<li><a href="{{route('sobre')}}">Sobre nós</a></li>
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

@include("partials._mensagens")

<form id = "form_comprar" action = "{{route('comprar')}}" onsubmit="return preparaCompra()" method="POST">

	@csrf

	@if(isset($produtos))

		@foreach($produtos as $produto)
			<input type="hidden" name="produtos[{{$produto->id}}]" id = "{{$produto->nome_produto}}" value = "-1">
		@endforeach

	@endif

</form>

<script type="text/javascript">
	
	function preparaCompra(){

		@if(Auth::user() == null)
			alert('É necessário estar logado para finalizar a compra.')
			return;
		@endif

		var itens = paypal.minicart.cart.items();

		if(itens.length == 0){
			alert('Carrinho está vazio.')
			return;
		}

		for(i = 0; i < itens.length; i++){
			document.getElementById(itens[i]._data.item_name).value = itens[i]._data.quantity;
		}

		document.getElementById('form_comprar').submit();
	}

</script>



<!-- //header -->
