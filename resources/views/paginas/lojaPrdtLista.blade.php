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
@include('partials._breadcrumbs', ['pagina' => "Lista de Produtos"])

<!-- //Jumbotron -->
	<div class="container" style="padding-bottom: 20px;">
		 <!-- //form para adicionar os itens -->
       <table class="table table-bordered" style="width: 800px;">
            <thead class="thead-dark">
              <tr class="bg-info">
                <th scope="col">id</th>
					 <th scope="col">Código</th>
					 <th scope="col">Produto</th>
                <th scope="col">Preço</th>
					 <th scope="col">Categoria</th>
					 <th scope="col">Quantidade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1904982-6</td>
                <td>Iphone9</td>
					 <td>650$</td>
					 <td>Smartphone</td>
					 <td>52</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>504982-6</td>
                <td>Geladeira cce 4b2</td>
					 <td>872$</td>
					 <td>Eletrodoméstico</td>
					 <td>22</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>295893-6</td>
                <td>Sofá Lacoste Aspire-x</td>
					 <td>100$</td>
					 <td>Móvel</td>
					 <td>67</td>
              </tr>
            </tbody>
          </table>
		 <!-- //form para adicionar os itens -->
	</div>
 </div>
 <!-- //Jumbotron -->
@endsection
