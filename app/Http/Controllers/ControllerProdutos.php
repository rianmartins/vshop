<?php

//  id | nome_produto | setor_produto | description | valor_unitario | id_loja | created_at | update_at

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ControllerProdutos extends Controller
{
    public function add_produto(Request $request,Response $response)
    {

        $validate = $request->validate([
          'nome_produto' => 'required',
          'setor_produto' => 'required',
          'valor_unitario' => 'required',
          'id_loja' => 'required',
          'description' => 'required'
        ]);
        $insert = [  
              "nome_produto" => $request->input('nome_produto'),
              "setor_produto" => $request->input('setor_produto'),
              "description" => $request->input('description'),
              "valor_unitario" => $request->input('valor_unitario'),
              "id_loja" => $request->input('id_loja'),
              "created_at" => "now()",
              "update_at" => "now()"
        ];
        DB::table('produtos')->insert($insert);
        return $response->json(["msg" => "Added"]);
    }

    public function edit_produto(Request $request,Response $response)
    {
          $validate = $request->validate([
            'id' => 'required'
          ]);
          $edit = [  
                "nome_produto" => $request->input('nome_produto'),
                "setor_produto" => $request->input('setor_produto'),
                "description" => $request->input('description'),
                "valor_unitario" => $request->input('valor_unitario'),
                "id_loja" => $request->input('id_loja'),
                "description" => $request->input('description'),
                "update_at" => "now()"
          ];
          DB::table('produtos')->where('id',$request->input(id)
                               ->update([$edit]));
          return $response->json(["msg" => "Edited"]);
    }
    
    
    public function del_produto(Request $request,Response $response)
    {
          $validate = $request->validate(['id' => 'required']);
          $edit = ["id" => $request->input('id')];
          DB::table('produtos')->where('id', $request->input('id'))->delete();
                               
          return $response->json(["msg" => "Deleted"]);
    }
    public function list_produto(Request $request,Response $response)
    {
        return  $response->json(DB::table('produtos')->get());
    }
    public function list_only_produto(Request $request,Response $response)
    {
        $validate = $request->validate(['id_loja' => 'required']);
        return  $response->json(DB::table('produtos')->where('id_loja',$request->input('id_loja'))->get());
    }
    public function get_produto(Request $request,Response $response)
    {
        $validate = $request->validate(['id' => 'required']);
        return  $response->json(DB::table('produtos')->where('id',$request->input('id'))->get());
    }
}
