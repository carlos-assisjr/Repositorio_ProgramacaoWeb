@extends('layout')

@section('conteudo')
    <h1>Consultar Aluguel</h1>
    <form method="post" action="/alugueis/{{ $aluguel->id }}">
        @csrf
        @method('DELETE')

        <div class="mb-3">
            <p>ID: <strong>{{ $aluguel->id }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Cliente: <strong>{{ $aluguel->cliente->nome }}</strong></p>

        <div class="mb-3">
            <p>Status: <strong>{{ $aluguel->status }}</strong></p>
        </div>

        <button type="submit" class="btn btn-danger">Excluir o registro</button>
        <a href="/alugueis" class="btn btn-secondary">Voltar</a>
    </form>
@endsection