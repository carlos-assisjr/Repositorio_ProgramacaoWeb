@extends('layout')

@section('conteudo')
    <h1>Editar Loja</h1>

    <form action="{{ route('lojas.update', $loja->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control"
                value="{{ $loja->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control"
                value="{{ $loja->endereco }}" required>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control"
                value="{{ $loja->cidade }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <input type="text" name="estado" id="estado" class="form-control"
                value="{{ $loja->estado }}" required>
        </div>

        <div class="mb-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" name="cep" id="cep" class="form-control"
                value="{{ $loja->cep }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('lojas.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection