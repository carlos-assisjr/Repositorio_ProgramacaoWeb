
@extends('layout')

@section('conteudo')
    <h1>Criar Aluguel</h1>
    <form method="post" action="/alugueis">
        @CSRF

        <div class="mb-3">
            <label for="user_id" class="form-label">Selecione o usuário:</label>
            <select name="user_id" id="user_id" class="form-select" required>
                @foreach($users as $u)
                    <option value="{{ $u->id }}">{{ $u->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="unidade_produto_id" class="form-label">Selecione a unidade:</label>
            <select name="unidade_produto_id" id="unidade_produto_id" class="form-select" required>
                @foreach($unidades as $up)
                    <option value="{{ $up->id }}">
                        {{ $up->id }} - {{ $up->codigo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de início:</label>
            <input type="date" id="data_inicio" name="data_inicio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de fim:</label>
            <input type="date" id="data_fim" name="data_fim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="valor_total" class="form-label">Valor total:</label>
            <input type="number" step="0.01" id="valor_total" name="valor_total" class="form-control" required>
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