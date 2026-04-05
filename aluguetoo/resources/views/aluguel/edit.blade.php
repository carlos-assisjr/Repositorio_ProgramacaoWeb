@extends('layout')

@section('conteudo')
    <h1>Editar Aluguel</h1>
    <form method="post" action="/alugueis/{{ $aluguel->id }}">
        @CSRF
        @METHOD('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">Selecione o usuário:</label>
            <select name="user_id" id="user_id" class="form-select" required>
                @foreach($users as $u)
                    <option value="{{ $u->id }}" {{ $aluguel->user_id == $u->id ? 'selected' : '' }}>
                        {{ $u->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="unidades_id" class="form-label">Selecione a unidade:</label>
            <select name="unidades_id" id="unidades_id" class="form-select" required>
                @foreach($unidades as $up)
                    <option value="{{ $up->id }}" {{ $aluguel->unidades_id == $up->id ? 'selected' : '' }}>
                        {{ $up->id }} - {{ $up->numero_serie }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de início:</label>
            <input type="date" id="data_inicio" name="data_inicio" class="form-control" required value="{{ $aluguel->data_inicio }}">
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de fim:</label>
            <input type="date" id="data_fim" name="data_fim" class="form-control" required value="{{ $aluguel->data_fim }}">
        </div>

        <div class="mb-3">
            <label for="valor_total" class="form-label">Valor total:</label>
            <input type="number" step="0.01" id="valor_total" name="valor_total" class="form-control" required value="{{ $aluguel->valor_total }}">
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

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection