<?php

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

Route::get('/', [SiteController::class, 'index']);

Route::get('/sobre', [SiteController::class, 'sobre']);

Route::get('/contato', [SiteController::class, 'contato']);


Route::get('/servico/{id}', [SiteController::class, 'servico']);


Route::get('/saudacao/{nome}', Saudacao::class);

//Pega todos dados da table client
Route::get('/clients', function(){
    dd(Client::get());
});