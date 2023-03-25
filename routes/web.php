<?php

use App\Models\Servico;
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
    $meuprimeiroservico = new Servico;
    $meuprimeiroservico->nome = "cavalo";
    $meuprimeiroservico->telefone = "11 977168890";
    $meuprimeiroservico->email= "horsesupremacy@gmail.com";
    $meuprimeiroservico->cidade = "São Paulo";
    $meuprimeiroservico->estado = "SP";
    $meuprimeiroservico->save();
    return view('welcome');
});
