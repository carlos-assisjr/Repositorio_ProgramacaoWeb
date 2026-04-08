@extends('layout')

@section('conteudo')
<h1>Editar Aluguel</h1>
<form method="post" action="/alugueis/{{ $aluguel->id }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="cliente_id" class="form-label"> Informe o Cliente:</label>
        <select name="cliente_id" id="cliente_id" class="form-select" required>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}" {{ $aluguel->cliente_id == $c->id ? 'selected' : '' }}>{{ $c->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status:</label>
        <select name="status" id="status" class="form-select" required>
            <option value="PENDENTE" {{ $aluguel->status == 'PENDENTE' ? 'selected' : '' }}>PENDENTE</option>
            <option value="CONFIRMADO" {{ $aluguel->status == 'CONFIRMADO' ? 'selected' : '' }}>CONFIRMADO</option>
            <option value="EM_ANDAMENTO" {{ $aluguel->status == 'EM_ANDAMENTO' ? 'selected' : '' }}>EM_ANDAMENTO</option>
            <option value="FINALIZADO" {{ $aluguel->status == 'FINALIZADO' ? 'selected' : '' }}>FINALIZADO</option>
            <option value="CANCELADO" {{ $aluguel->status == 'CANCELADO' ? 'selected' : '' }}>CANCELADO</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{ route('alugueis.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection