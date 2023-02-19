@extends('app')
@section('title', 'Editando Cliente')
@section('conteudo')
    <h1>Editando cliente {{ $client->nome }}</h1>

    <form action="{{ route('client.update', $client) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Cliente</label>
            <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome"
                placeholder="Digite o nome do cliente" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco"
                placeholder="Endereço do cliente" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Observações" required>{{ $client->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
