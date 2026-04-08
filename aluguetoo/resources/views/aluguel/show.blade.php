@extends('layout')

@section('conteudo')
<h1>Detalhes do Aluguel</h1>

<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $aluguel->id }}</p>
        <p><strong>Cliente:</strong> {{ $aluguel->cliente->nome ?? '-' }}</p>
        <p><strong>Status:</strong> {{ $aluguel->status }}</p>
    </div>
</div>

<a href="{{ route('alugueis.index') }}" class="btn btn-secondary mt-3">Voltar</a>
<a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection