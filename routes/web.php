<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

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

Route::get('/', HomeController::class); //tela inicial

/*
* Produtos Exibição
* Tela de exibição produtos (name seria um alias)
*/
Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');

/*
* Produtos Inserir
* Tela com o formulario de inserir produtos
*/
Route::get('produtos/inserir', [ProdutosController::class, 'create']);

/*
* Produtos Inserir
* Tela de exibicao de produtos com o parametros valor opcional
*/
Route::get('produtos/{id}', [ProdutosController::class, 'show']);

/*
* Produtos Inserir
* rota tipo post contendo informaçoes do formulario para inserir dados
*/
Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');

/*
* Produtos Editar GET
* Via get para capturacao dos dados para edicao do produto
*/
Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');

/*
* Produtos Editar PUT
* Envio das informações para o banco
* Quando o formulario vai via PUT, sabe que é para editar e nao para salvar
*/
Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

/*
* Produtos Deletar
* Envio das informações para o banco
* Quando o formulario vai via DELETE, sabe que é para editar e nao para salvar
*/
Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');
