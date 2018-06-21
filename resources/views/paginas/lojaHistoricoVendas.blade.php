@extends('main')
@section('conteudo')
    @include('partials._header_loja')
    @include('partials._breadcrumbs', ['pagina' => "Histórico de Vendas"])

	<div class="container" style="padding-bottom: 20px;">
        <br>
		 <!-- //form para adicionar os itens -->
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
                </div>


            </div>

    @endforeach

    {{$compras->links()}}

        @if(count($compras) == 0)
            <h1 class="text-center" style="padding-bottom: 5%">Nenhuma compra aprovada</h1>
        @endif

	</div>
 <!-- //Jumbotron -->
@endsection
