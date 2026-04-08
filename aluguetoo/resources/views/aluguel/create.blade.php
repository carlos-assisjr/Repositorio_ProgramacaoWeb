@extends('layout')

@section('conteudo')
<h1>Criar Aluguel</h1>
<form method="post" action="/alugueis">
    @CSRF

    <div class="mb-3">
        <label for="cliente_id" class="form-label">Informe o Cliente:</label>
        <select name="cliente_id" id="cliente_id" class="form-select" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status:</label>
        <select name="status" id="status" class="form-select" required>
            <option value="PENDENTE">PENDENTE</option>
            <option value="CONFIRMADO">CONFIRMADO</option>
            <option value="EM_ANDAMENTO">EM_ANDAMENTO</option>
            <option value="FINALIZADO">FINALIZADO</option>
            <option value="CANCELADO">CANCELADO</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection