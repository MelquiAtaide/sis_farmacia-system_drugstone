<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'App\Http\Controllers\LoginController@login')->name("login");
Route::post('/logar', 'App\Http\Controllers\LoginController@logar')->name("logar");

Route::get('/index', 'App\Http\Controllers\IndexController@index')->name("index");
Route::get('/estoque', 'App\Http\Controllers\EstoqueController@estoque')->name("estoque");
Route::get('/venda', 'App\Http\Controllers\VendaController@venda')->name("venda");
Route::get('/cliente', 'App\Http\Controllers\ClienteController@cliente')->name("cliente");
Route::get('/fornecedor', 'App\Http\Controllers\FornecedorController@fornecedor')->name("fornecedor");
Route::get('/funcionario', 'App\Http\Controllers\FuncionarioController@funcionario')->name("funcionario");

