@extends('app')
@section('title', 'Lista de clientes')
@section('conteudo')
    <h1>Detalhes do cliente {{ $client->id }}</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nome do cliente: {{ $client->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Endereço: {{ $client->endereco }}</h6>
            <p class="card-text">Observações: {{ $client->observacao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar</a>
        </div>
    </div>
@endsection
