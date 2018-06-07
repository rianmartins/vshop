
@extends('main')

@section('conteudo')

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left" >
				<h1><a href="index.html" style="color: #33cccc;">Nome da Loja</a></h1>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => ""])


@endsection
