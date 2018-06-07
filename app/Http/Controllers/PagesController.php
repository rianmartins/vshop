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
        if(Auth::user() != null && Auth::user()->hasRole("empresario"))
            return $this->getLoja();

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


}
