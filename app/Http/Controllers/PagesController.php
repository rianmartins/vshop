<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
