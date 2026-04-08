@extends('layout')

@section('conteudo')
    <h1>Detalhes do Item do Aluguel</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $aluguelItem->id }}</p>
            <p><strong>Aluguel:</strong> {{ $aluguelItem->aluguel_id }}</p>
            <p><strong>Unidade do Produto:</strong> {{ $aluguelItem->unidade_produto_id }}</p>
            <p><strong>Valor da Diária:</strong> R$ {{ number_format($aluguelItem->valor_diaria_contratada, 2, ',', '.') }}</p>
            <p><strong>Quantidade de Dias:</strong> {{ $aluguelItem->quantidade_dias }}</p>
            <p><strong>Subtotal:</strong> R$ {{ number_format($aluguelItem->subtotal, 2, ',', '.') }}</p>
        </div>
    </div>

    <a href="{{ route('itens_aluguel.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('itens_aluguel.edit', $aluguelItem->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection