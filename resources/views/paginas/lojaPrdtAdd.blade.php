
@extends('main')

@section('conteudo')

@include('partials._header_loja')
@include('partials._breadcrumbs', ['pagina' => "Adicionar Produtos"])

	<div class="container" style="padding-bottom: 20px;">
		 <!-- //form para adicionar os itens -->
		 <form>
			<div class="form-group">
			  <label for="nome" >Produto</label>
			  <input type="text" class="form-control" id="nome" placeholder="Produto">
			</div>
			<div class="form-group">
				<label for="preco">Preço</label>
				<input type="number" class="form-control" id="preco" placeholder="Preço">
			 </div>
			 <div class="form-group">
				<label for="code" >Código</label>
				<input type="text" class="form-control" id="code" placeholder="Código">
			 </div>
			<div class="form-group">
				<label for="categoria" >Categoria</label>
				<input type="text" class="form-control" id="categoria" placeholder="Categoria">
			</div>
			<div class="form-group">
				<label for="quantidade" >Quantidade</label>
				<input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
			</div>
			<div class="form-group">
			  <label for="descricao">Descrição</label>
			  <textarea class="form-control" id="descricao" rows="3" placeholder="Descrição "></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Imagem do produto(150x150 pixels)</label>
				<input type="file" class="form-control-file" id="imgProduto" placeholder="imagem do produto">
			 </div>
			 <button type="submit" class="btn btn-primary" data-toggle="" data-target="">Adicionar</button>
			 <!-- <a class="btn btn-primary" href="#confirm" role="button">Adicionar</a> -->
		 </form>
		 <!-- //form para adicionar os itens -->
	</div>
 </div>
 <!-- //Jumbotron -->
@endsection
