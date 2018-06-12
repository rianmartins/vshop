<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('paginas.index');
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
        return view('paginas.offers');
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
