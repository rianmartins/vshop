<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/adminLoja', 'PagesController@getAdminLoja')->name('adminLoja');
Route::get('/novoProduto', 'PagesController@getAdicionarProduto')->name('novoProduto');
Route::get('/listaProdutos', 'PagesController@getListarProdutos')->name('listaProdutos');
Route::get('/historicoVendas', 'PagesController@getHistoricoVendas')->name('historicoVendas');

Route::get('/loja', 'PagesController@getLoja')->name('loja');
Route::get('/ofertas', 'PagesController@getOfertas')->name('ofertas');
Route::get('/vshop', 'PagesController@getSobreNos')->name('sobre');
Route::get('/contato', 'PagesController@getContato')->name('contato');
Route::get('/', 'PagesController@index')->name('home');
Route::get('/home', 'PagesController@index');
