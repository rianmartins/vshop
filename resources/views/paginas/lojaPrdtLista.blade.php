@extends('main')
@section('conteudo')
@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => "Lista de Produtos"])

<!-- //Jumbotron -->
	<div class="container" style="padding-bottom: 20px;">
        <br>
		 <!-- //form para adicionar os itens -->
       <table class="table table-bordered" style="width: 800px;">
            <thead class="thead-dark">
              <tr class="bg-info">
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
              </tr>
            </thead>
            <tbody>

              @foreach($produtos as $produto)

                  <tr>
                    <th scope="row">{{$produto->id}}</th>
                    <td>{{$produto->nome_produto}}</td>
                    <td>{{$produto->setor_produto}}</td>
                    <td>R$ {{number_format($produto->valor_unitario,2,",",".")}}</td>
                    <td><button class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</button></td>
                    <td><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Excluir</button></td>
                  </tr>

              @endforeach

            </tbody>
          </table>
		 <!-- //form para adicionar os itens -->
	</div>
 </div>
 <!-- //Jumbotron -->
@endsection
