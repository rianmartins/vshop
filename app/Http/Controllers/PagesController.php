<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Compra;
use App\Leilao;
use App\Loja;
use Session;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user() != null){
            if(Auth::user()->hasRole("empresario")){
                return $this->getLoja();
            }
            else if (Auth::user()->hasRole("admin"))
                return $this->getAdminRoot();
        }

        $lojas = Loja::all();

        return view('paginas.index')->withLojas($lojas);
    }


    /**
     * Mostra página de contato.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContato()
    {
        return view('paginas.contact');
    }

    /**
     * Mostra página sobre nós.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSobreNos()
    {
        return view('paginas.about');
    }

    /**
     * Mostra página de ofertas.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOfertas()
    {

        $produtos = Produto::all();

        return view('paginas.offers')->withProdutos($produtos);
    }

    public function postComprar(Request $request){

        //die(var_dump($request->produtos));

        $compra = new Compra();
        $protocolo = 2300000 + Compra::max('id') + 1;
        $descricao = "";
        $total = 0;
        $cliente = Auth::user()->name." | ".Auth::user()->email;

        if(isset($request->produtos)){         

            foreach ($request->produtos as $id=>$quantidade_produto) {

                if($quantidade_produto != -1){
                    $produto = Produto::find($id);
                    $descricao = $descricao.$produto->nome_produto." - ".$produto->description." | Valor: $".money_format('%(#10n', $produto->valor_unitario-1)." | Quantidade: ".$quantidade_produto."; ";  
                    $total += $quantidade_produto * $produto->valor_unitario-1;  
                }
                
            }   

            $compra->protocolo = $protocolo;
            $compra->descricao = $descricao;
            $compra->total = $total;
            $compra->cliente = $cliente;
            $compra->save();
        }

        Session::flash('sucesso', "Pedido submetido! Aguarde até 3 dias úteis para a aprovação! Número do pedido: ".$protocolo);

        return redirect('/');
    }

    public function postLeilao(Request $request){

        $produto = Produto::find($request->id_produto);

        if($request->lance >= $produto->valor_unitario){
            Session::flash('erro', "O valor do lance não pode ser maior ou igual ao valor do produto.");

            return redirect('/ofertas');
        }
        else if(($produto->valor_unitario - $request->lance) * 100 / $produto->valor_unitario > 20){
            Session::flash('erro', "Lance indeferido.");

            return redirect('/ofertas');
        }

        $protocolo = 1420000 + Leilao::max('id') + 1;

        $leilao = new Leilao();
        $leilao->protocolo = $protocolo;
        $leilao->id_produto = $request->id_produto;
        $leilao->id_user = Auth::user()->id;
        $leilao->lance = $request->lance;
        $leilao->save();

        Session::flash('sucesso', "Lance submetido! Aguarde o retorno da nossa equipe! Protocolo: ".$protocolo);

        return redirect('/');
    }
    

    public function getLeiloes(){

        $leiloes = Leilao::orderBy('created_at', 'desc')->paginate(5);

        return view('paginas.loja_leiloes')->withLeiloes($leiloes);
    }


    public function getCompras(){

        $compras = Compra::orderBy('created_at', 'desc')->paginate(5);

        return view('paginas.loja_compras')->withCompras($compras);
    }

    /**
     * Mostra página de loga.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLoja()
    {
        return view('paginas.loja');
    }

    /**
     * Mostra página do admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdminLoja()
    {
        return view('paginas.adminLoja');
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdminRoot()
    {
        return view('paginas.adminRoot');
    }

    /**
     * Mostra página de adição de novo produto.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdicionarProduto()
    {
        return view('paginas.lojaPrdtAdd');
    }

    /**
     * Mostra página de adição de novo produto.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListarProdutos()
    {
        return view('paginas.lojaPrdtLista');
    }

    /**
     * Mostra página de adição de novo produto.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHistoricoVendas()
    {
        return view('paginas.lojaHistoricoVendas');
    }
}
