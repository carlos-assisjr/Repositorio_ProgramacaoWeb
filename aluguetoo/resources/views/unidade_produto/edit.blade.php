@extends('layout')

@section('conteudo')
    <h1>Editar Unidade do Produto</h1>
    <form method="post" action="/unidades_produtos/{{ $unidade->id }}">
        @CSRF
        @METHOD('PUT')

        <div class="mb-3">
            <label for="produto_id" class="form-label">Selecione o produto:</label>
            <select name="produto_id" id="produto_id" class="form-select" required>
                @foreach($produtos as $p)
                    <option value="{{ $p->id }}" {{ $p->id == $unidade->produto_id ? 'selected' : '' }}>
                        {{ $p->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="numero_serie" class="form-label">Informe o número de série:</label>
            <input type="text" id="numero_serie" name="numero_serie" class="form-control" value="{{ $unidade->numero_serie }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Informe o status:</label>
            <select name="status" id="status" class="form-select" required>
                <option value="DISPONIVEL" {{ $unidade->status == 'DISPONIVEL' ? 'selected' : '' }}>DISPONIVEL</option>
                <option value="ALUGADO" {{ $unidade->status == 'ALUGADO' ? 'selected' : '' }}>ALUGADO</option>
                <option value="MANUTENCAO" {{ $unidade->status == 'MANUTENCAO' ? 'selected' : '' }}>MANUTENCAO</option>
                <option value="INATIVO" {{ $unidade->status == 'INATIVO' ? 'selected' : '' }}>INATIVO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection