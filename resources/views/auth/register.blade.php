@extends('main')

@section('title', "Registro")

@section('conteudo')
@include('partials._header_busca')

	@include('partials._breadcrumbs', ['pagina' => "Registro"])

	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Registre-se</h2>

			<div class="login-form-grids">

				<h5>Informações do perfil</h5>

				<form action="{{ route('register') }}" method="POST">

					@csrf

					<input id = "name" name = "name" type="text" placeholder="Nome completo ex: Castiel, Umbrella Corporation..." value="{{ old('name') }}" required=" " >

					 @if ($errors->has('name'))
                        <span class="alert alert-danger" style="font-size: 10px;">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

					<!--

					<input type="text" placeholder="Cpf/Cnpj ex: 192.168.162-80..." required=" " >
					<input type="text" placeholder="Data de Nascimento/Fundação ex: 01/05/1999..." required=" " >
					<input style="margin-top: 13px;" type="text" placeholder="Número ex: 84996785743..." required=" " >

					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Quero receber novidades e promoções por email</label>
						</div>
					</div>
					-->
					<h6>Informações da Conta</h6>

					<input id ="email" name = "email" type="email" placeholder="Endereço de E-mail" value="{{ old('email') }}" required=" " >

					@if ($errors->has('email'))
                        <span class="alert alert-danger" style="font-size: 10px;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

					<input id="password" name = "password" type="password" placeholder="Senha" required=" " >

					 @if ($errors->has('password'))
                        <span class="alert alert-danger" style="font-size: 10px;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif

					<input id ="password-confirm" name="password_confirmation" type="password" placeholder="Confirmar senha" required=" " >

					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Estou pronto para fazer minhas compras!</label>
						</div>
					</div>

					<input type="submit" value="Concluir">
					<p style="margin-top: 20px;"><a href="{{route('home')}}">Voltar para a tela Principal<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
				</form>
			</div>

		</div>
	</div>
<!-- //register -->

@endsection
