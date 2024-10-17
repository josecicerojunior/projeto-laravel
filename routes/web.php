<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route:: get('/','PrincipalController@principal')->name('site.index');
Route:: get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route:: get('/contato', 'ContatoController@contato')->name('site.contato');
Route:: post('/contato', 'ContatoController@contato')->name('site.contato');

Route::prefix('/app')->group(function(){

Route::get('/login', function (){ return 'Login'; })->name('app.login');
Route::get('/clientes', function (){ return 'Clientes'; })->name('app.clientes');
Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
Route::get('/produtos', function (){ return 'Produtos'; })->name('app.produtos');
});

route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

route::fallback(function (){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> 
    para ir página inicial';
});

// Route::get ('/contato/{nome}/{categoria}', function (string $nome, string $categoria)
// {
//     echo "Estamos aqui: $nome - $categoria";

// });




// Route::get('/sobre-nos', function () {
//     return 'Sobre nós';
// });
