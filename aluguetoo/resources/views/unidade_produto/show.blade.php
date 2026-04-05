@extends('layout')

@section('conteudo')
    <h1>Consultar Unidade do Produto</h1>
    <form method="post" action="/unidades_produtos/{{ $unidade->id }}">
        @CSRF
        @METHOD('DELETE')

        <div class="mb-3">
            <p>Produto ID: <strong>{{ $unidade->produto_id }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Número de Série: <strong>{{ $unidade->numero_serie }}</strong></p>
        </div>

        <div class="mb-3">
            <p>Status: <strong>{{ $unidade->status }}</strong></p>
        </div>

        <button type="submit" class="btn btn-danger">Excluir o registro</button>
        <a href="/unidades_produtos" class="btn btn-secondary">Voltar</a>
    </form>
@endsection