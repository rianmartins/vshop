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
    return view('list_produto');
});
*/

Auth::routes();


Route::post('/leilao', 'PagesController@postLeilao')->name('leilao');
Route::get('/leiloes', 'PagesController@getLeiloes')->name('leiloes');
Route::get('/compras', 'PagesController@getCompras')->name('compras');
Route::post('/comprar', 'PagesController@postComprar')->name('comprar');
Route::resource('contatos', 'ContatoController');

Route::get('/adminRoot', 'PagesController@getAdminRoot')->name('adminRoot');
Route::get('/adminLoja', 'PagesController@getAdminLoja')->name('adminLoja');
Route::get('/novoProduto', 'PagesController@getAdicionarProduto')->name('novoProduto');
Route::get('/listaProdutos', 'PagesController@getListarProdutos')->name('listaProdutos');
Route::get('/historicoVendas', 'PagesController@getHistoricoVendas')->name('historicoVendas');


Route::get('/produtos', 'ControllerProdutos@get_produto');
Route::get('/listProdutos', 'ControllerProdutos@list_produto');
Route::get('/listProdutosOnly', 'ControllerProdutos@list_only_produto');
Route::post('/novoProdutos', 'ControllerProdutos@add_produto');
Route::put('/editProdutos', 'ControllerProdutos@edit_produto');
Route::delete('/delProdutos', 'ControllerProdutos@del_produto');

Route::get('/Lojas', 'ControllerLojas@get_lojas');
Route::get('/listLojas', 'ControllerLojas@list_lojas');
Route::post('/novoLojas', 'ControllerLojas@add_lojas');
Route::put('/editLojas', 'ControllerLojas@edit_lojas');
Route::delete('/delLojas', 'ControllerLojas@del_lojas');


Route::get('/loja', 'PagesController@getLoja')->name('loja');
Route::get('/ofertas', 'PagesController@getOfertas')->name('ofertas');
Route::get('/vshop', 'PagesController@getSobreNos')->name('sobre');
//Route::get('/contato', 'PagesController@getContato')->name('contato');
Route::get('/', 'PagesController@index')->name('home');
Route::get('/home', 'PagesController@index');
