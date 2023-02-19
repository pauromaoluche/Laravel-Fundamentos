<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;
use App\Models\Client;
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

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/sobre', [SiteController::class, 'sobre']);

Route::get('/contato', [SiteController::class, 'contato']);


Route::get('/servico/{id}', [SiteController::class, 'servico']);


Route::get('/saudacao/{nome}', Saudacao::class);

//Pega todos dados da table client
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

//Criando novo client
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');

//Pegando cliente em especifico
Route::get('/client/{id}', [ClientController::class, 'show'])->name('client.show');

//Enviando dados do client para o banco
Route::post('/client', [ClientController::class, 'store'])->name('client.store');

//Pegando cliente em especifico para editar
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
//Enviando dados do client para o banco
Route::put('/client/edit/{id}', [ClientController::class, 'update'])->name('client.update');

//Deletando um cliente
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');