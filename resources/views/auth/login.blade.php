@extends('main')

@section('title', "Login")

@section('conteudo')


	@include('partials._breadcrumbs', ['pagina' => "Entrar"])

	<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Entrar</h2>

			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form>
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

@endsection
