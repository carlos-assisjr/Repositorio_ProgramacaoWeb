@extends('layout')

@section('conteudo')
    <h1>Detalhes da Loja</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $loja->id }}</p>
            <p><strong>Nome:</strong> {{ $loja->nome }}</p>
            <p><strong>Endereço:</strong> {{ $loja->endereco }}</p>
            <p><strong>Cidade:</strong> {{ $loja->cidade }}</p>
            <p><strong>Estado:</strong> {{ $loja->estado }}</p>
            <p><strong>CEP:</strong> {{ $loja->cep }}</p>
        </div>
    </div>

    <a href="{{ route('lojas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('lojas.edit', $loja->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection