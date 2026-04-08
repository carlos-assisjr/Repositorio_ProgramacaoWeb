@extends('layout')

@section('conteudo')
<h1>Editar Ferramenta</h1>
<form method="post" action="/ferramentas/{{ $ferramenta->id }}">
    @CSRF
    @METHOD('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Informe o nome:</label>
        <input type="text" id="nome"
            name="nome" class="form-control" required="" value="{{ $ferramenta->nome }}">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Informe a marca:</label>
        <input type="text" id="marca" name="marca" class="form-control" value="{{ $ferramenta->marca }}">
    </div>
    <div class="mb-3">
        <label for="numero_serie" class="form-label">Informe o número de série:</label>
        <input type="text" id="numero_serie" name="numero_serie"
            class="form-control" required="" value="{{ $ferramenta->numero_serie }}">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Informe a descrição:</label>
        <input type="text" id="descricao" name="descricao"
            class="form-control" required="" value="{{ $ferramenta->descricao }}">
    </div>
    <div class="mb-3">
        <label for="loja" class="form-label">Informe a loja:</label>
        <input type="text" id="loja" name="loja" class="form-control" value="{{ $ferramenta->loja }}">
        <div class="mb-3">
            <label for="valor_diaria" class="form-label">Valor da diária:</label>
            <input type="number" step="0.01" id="valor_diaria" name="valor_diaria" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Selecione a categoria:</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required>
                @foreach ($categorias as $c)
                <option value="{{ $c->id }}"
                    {{ $produto->categoria_id == $c->id ? 'selected' : '' }}>
                    {{ $c->nome }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection