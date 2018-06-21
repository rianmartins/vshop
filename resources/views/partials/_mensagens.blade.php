<div class="container">

	@if(Session::has('sucesso'))

	    <div class="alert alert-success" role="alert">
	            <strong>Sucesso: </strong> {{ Session::get('sucesso')}}
	    </div>

	@endif

	@if(Session::has('erro'))

	        <div class="alert alert-danger" role="alert">
	                <strong>Erro: </strong> {{ Session::get('erro')}}
	        </div>

	@endif

	@if(count($errors) > 0)

	        <div class="alert alert-danger" role="alert">
	                <strong>Erros:</strong>
	                <ul>
	                @foreach($errors->all() as $error)
	                        <li> {{ $error }} </li>
	                @endforeach
	                </ul>
	        </div>

	@endif

</div>