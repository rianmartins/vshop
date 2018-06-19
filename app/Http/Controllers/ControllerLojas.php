<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facedes\Storage;

class ControllerLojas extends Controller
{
    public function add_lojas(Request $request,Response $response)
    {
        if ($request->file('photo')->isValid()) {
            $path = $request->photo->store('photo');
        }
        $validate = $request->validate([
            'id' => 'required',
            'nome' => 'required',
            'nome_responsavel' => 'required',
            'contato_responsavel' => 'required',
            'ativo' => 'required'
            ]);
            $insert = [  
                "id" => $request->input('id'),
                "nome" => $request->input('nome'),
                "nome_responsavel" => $request->input('nome_responsavel'),
                "contato_responsavel" => $request->input('contato_responsavel'),
                "ativo" => $request->input('ativo'),
                "logo_link" => $path,
                "created_at" => "now()",
                "update_at" => "now()"
            ];
            DB::table('lojas')->insert($insert);
            return $response->json(["msg" => "Added"]);
        }
        
    //   id | nome | nome_responsavel | contato_responsavel | ativo | logo_link | created_at | updated_at
    public function edit_lojas(Request $request,Response $response)
    {
          $validate = $request->validate([
            'id' => 'required'
          ]);
          $edit = [  
                "nome" => $request->input('nome'),
                "nome_responsavel" => $request->input('nome_responsavel'),
                "contato_responsavel" => $request->input('contato_responsavel'),
                "ativo" => $request->input('ativo'),
                "logo_link" => $request->input('logo_link'),
                "update_at" => "now()"
          ];
          DB::table('lojas')->where('id',$request->input(id)
                               ->update([$edit]));
          return $response->json(["msg" => "Edited"]);
    }
    
    public function del_lojas(Request $request,Response $response)
    {
          $validate = $request->validate(['id' => 'required']);
          $edit = ["id" => $request->input('id')];
          DB::table('lojas')->where('id', $request->input('id'))->delete();
                               
          return $response->json(["msg" => "Deleted"]);
    }
    public function list_lojas(Request $request,Response $response)
    {
        return  $response->json(DB::table('lojas')->get());
    }
    public function get_lojas(Request $request,Response $response)
    {
        $validate = $request->validate(['id' => 'required']);
        return  $response->json(DB::table('lojas')->where('id',$request->input('id'))->get());
    }
}
