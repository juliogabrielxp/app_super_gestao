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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{idade}/{profissao?}', function(string $nome, int $idade, string $profissao = 'profissão não informada') {
    echo "Meu nome é $nome, tenho $idade anos e trabalho como $profissao";
})->where('nome', '[A-Za-z]+')->where('idade', '[1-99]+');
