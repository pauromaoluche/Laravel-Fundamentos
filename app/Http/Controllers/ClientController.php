<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function show(int $id)
    {
        $client = Client::find($id);

        return view('clients.show',[
            'client' => $client
        ]);
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        // //Pega todos valores que foram enviado
        // $dados = $request->all();

        //Grava todos dados do form, exeto o token, pq n tem lugar para ele ser gravado
        $dados = $request->except('_token');

        //Cria o cliente no banco
        Client::create($dados);

        return redirect('/clients');
    }
}
