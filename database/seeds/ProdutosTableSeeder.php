<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto();
        $produto->nome_produto = "Notebook Dell Inspiron i15-5566-A70B";
        $produto->setor_produto = "Informática";
        $produto->description = "Intel Core i7 - 8GB 1TB LED 15,6” Placa de Video 2GB Windows 10";
        $produto->imagem = "notebook_dell.jpg";
        $produto->valor_unitario = 2899.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = true;
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Smartphone Lenovo S5";
        $produto->setor_produto = "Telefonia";
        $produto->description = "4G Smartphone 3GB RAM - PRETO 2";
        $produto->imagem = "smartphone_lenovo.jpeg";
        $produto->valor_unitario = 900.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = true;
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "A Arte da Guerra";
        $produto->setor_produto = "Livraria";
        $produto->description = "Sun Tzu";
        $produto->imagem = "arte_guerra.jpeg";
        $produto->valor_unitario = 30.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = false;
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Album Rust in Peace";
        $produto->setor_produto = "Música";
        $produto->description = "Megadeth";
        $produto->imagem = "rust_in_peace.jpeg";
        $produto->valor_unitario = 63.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = false;
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Lasanha";
        $produto->setor_produto = "Alimentos";
        $produto->description = "Colgate";
        $produto->imagem = "lasanha.jpg";
        $produto->valor_unitario = 10.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = false;
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "AK-47";
        $produto->setor_produto = "Militar";
        $produto->description = "Rifle";
        $produto->imagem = "ak47.jpg";
        $produto->valor_unitario = 3250.00;
        $produto->id_loja = "1";
        $produto->aceita_leilao = false;
        $produto->save();

    }
}
