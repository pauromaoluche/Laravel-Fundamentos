@extends('app')
@section('title', 'Novo Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>

    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" id="nome" name="name" placeholder="Digite o nome do cliente">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do cliente">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Observações"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
