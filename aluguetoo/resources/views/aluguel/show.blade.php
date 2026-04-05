@extends('layout')

@section('conteudo')
    <h1>Consultar Aluguel</h1>
    <form method="post" action="/alugueis/{{ $aluguel->id }}">
        @CSRF
        @METHOD('DELETE')

        <div class="mb-3">
            <p>User ID: <strong>{{ $aluguel->user_id }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Unidade Produto ID: <strong>{{ $aluguel->unidade_produto_id }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Data início: <strong>{{ $aluguel->data_inicio }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Data fim: <strong>{{ $aluguel->data_fim }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Valor total: <strong>R$ {{ number_format($aluguel->valor_total, 2, ',', '.') }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Status: <strong>{{ $aluguel->status }}</strong></p>
        </div>

        <button type="submit" class="btn btn-danger">Excluir o registro</button>
        <a href="/alugueis" class="btn btn-secondary">Voltar</a>
    </form>
@endsection