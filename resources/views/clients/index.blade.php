@extends('app')
@section('title', 'Lista de clientes')
@section('conteudo')
    <h1>Lista de clientes</h1>
    <a href="{{ route('client.create') }}" type="button" class="btn btn-primary mt-3 mb-3">Criar novo cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Observação</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td><a href="{{ route('client.show', $client) }}">{{ $client->nome }}</a></td>
                    <td>{{ $client->endereco }}</td>
                    <td>{{ $client->observacao }}</td>
                    <td><a href="{{ route('client.edit', $client) }}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
