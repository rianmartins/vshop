<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_produto');
      	    $table->string('setor_produto');
      	    $table->string('description');
            $table->string('imagem');
      	    $table->double('valor_unitario');
      	    $table->integer('id_loja');
            $table->boolean('aceita_leilao');
            $table->timestamps();
            //$table->timestamp('created_at')->nullable();
            //$table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

