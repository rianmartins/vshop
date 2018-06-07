@extends('main')

@section('title', "Login")

@section('conteudo')
@include('partials._header_busca')

	@include('partials._breadcrumbs', ['pagina' => "Entrar"])

	<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Entrar</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="POST" action="{{ route('login')}}">

					@csrf

					<input type="email" id = "email" name = "email" placeholder="Endereço de E-mail" value="{{ old('email') }}" required=" " >

					 @if ($errors->has('email'))
                        <span class="alert alert-danger" style="font-size: 10px;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

					<input id="password" name="password" type="password" placeholder="Senha" required=" " >

					@if ($errors->has('password'))
                        <span class="alert alert-danger" style="font-size: 10px;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

					<div class="forgot">
						<a href="#">Esqueceu sua senha ?</a>
					</div>
					<input type="submit" value="Entrar">
				</form>
			</div>
			<h4>Ainda não é registrado ?</h4>
			<p><a href="{{route('register')}}">Registre-se aqui</a>ou volte para a tela principal <a href="{{route('home')}}">Principal<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->

@endsection
