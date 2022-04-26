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

/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo';
});

Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});

# Route::get($uri, $callback)
Route::get('/contato', function () {
    return 'Contato';
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

# Definindo parametros para rotas. O que importa é a sequencia dos parametros:
Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem}',
    function (string $nome, string $categoria, string $assunto, string $mensagem) {
        printf("Estamos aqui: %s - %s - %s - %s", $nome, $categoria, $assunto, $mensagem);
    }
);