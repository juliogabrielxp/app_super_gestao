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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre-nos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/default', 'DefaultController@default')->name('site.default');

Route::get('/contato/{nome}/{idade}/{profissao?}', function(string $nome, int $idade, string $profissao = 'profissão não informada') {
    echo "Meu nome é $nome, tenho $idade anos e trabalho como $profissao";
})->where('nome', '[A-Za-z]+')->where('idade', '[1-99]+');

Route::get('/login', 'LoginController@login');

//Agrupamentos de rotas
Route::prefix('/app')->group(function() {
    Route::get('/clientes',function() { return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function() {return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function() {return 'Produtos';} )->name('app.produtos');
});

//Encaminhamento de parâmetros da rota para o controlador
use App\Http\Controllers\TesteController;

Route::get('/teste/{n1}/{n2}', [TesteController::class, 'teste'])->name('teste');

//Rota de contigência
Route::fallback(function() {
    return redirect()->route('site.default');
});











