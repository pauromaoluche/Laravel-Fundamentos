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

Route::get('/', function () {
    echo "Conteudo dinamico Home";
});

Route::get('/sobre', function () {
    echo "Conteudo dinamico Sobre";
});

Route::get('/contato', function () {
    echo "Conteudo dinamico Contato";
});

Route::get('/servicos/{id}', function (int $id) {
    echo "Estou mostrando o serviço com id $id";

    $servicos = [
        1 =>[
            'nome' => 'Lavagem de roupa',
            'descricao' => 'descricao muito longa'
        ],
        2 =>[
            'nome' => 'Lavagem de roupa',
            'descricao' => 'descricao muito lonmga'
        ],
        3 =>[
            'nome' => 'Lavagem de roupa',
            'descricao' => 'descricao muito lonmga'
        ],
    ];

    echo $servicos[$id]['nome'];
    echo "<br>";
    echo $servicos[$id]['descricao'];
});


Route::get('/saudacoes/{nome}', function (string $nome = 'TreinaWeb') {
    echo "Ola $nome";
});

