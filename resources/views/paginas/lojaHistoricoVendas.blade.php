
@extends('main')

@section('conteudo')

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left" >
				<h1><a href="#" style="color: #33cccc;">Nome da Loja</a></h1>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => "Histórico de Vendas"])

	<div class="container" style="padding-bottom: 20px;">
		 <!-- //form para adicionar os itens -->
       <table class="table table-bordered" style="width: 800px;">
            <thead class="thead-dark">
              <tr class="bg-info">
                <th scope="col">id</th>
                <th scope="col">Pedido</th>
                <th scope="col">Produto</th>
					 <th scope="col">Cliente</th>
					 <th scope="col">Cpf</th>
					 <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1904982-6</td>
                <td>iphone9</td>
					 <td>Steve</td>
					 <td>111.222.456-78</td>
					 <td>finalizado</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>504982-6</td>
                <td>geladeira cce 4b2</td>
					 <td>Lucas</td>
					 <td>511.222.456-58</td>
					 <td>pendente</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>295893-6</td>
                <td>Sofá Lacoste Aspire x</td>
					 <td>Rafaela</td>
					 <td>121.222.456-75</td>
					 <td>finalizado</td>
              </tr>
            </tbody>
          </table>
		 <!-- //form para adicionar os itens -->
	</div>
 </div>
 <!-- //Jumbotron -->
@endsection
