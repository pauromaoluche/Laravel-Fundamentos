<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index.index');
    }

    public function sobre(){
        echo "Conteudo dinamico Sobre";
    }

    public function contato(){
        echo "Conteudo dinamico Contato";
    }

    public function servico(int $id){

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

        return view('servico', [
            //Passamos um array, com base no id q passamos no url
            'servico' => $servicos[$id]
        ]);
    }


}
