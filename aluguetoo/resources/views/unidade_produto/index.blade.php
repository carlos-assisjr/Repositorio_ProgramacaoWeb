@extends('layout')

@section('conteudo')
    
    <h2>Unidades do Produto</h2>
    <a href="/unidades_produtos/create" class="btn btn-success mb-3">Novo Registro</a>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produto ID</th>
                <th>Número de Série</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $up)
            <tr>
                <td>{{ $up->id }}</td>
                <td>{{ $up->produto_id }}</td>
                <td>{{ $up->numero_serie }}</td>
                <td>{{ $up->status }}</td>
                <td class="d-flex gap-2">
                    <a href="/unidades_produtos/{{ $up->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <a href="/unidades_produtos/{{ $up->id }}" class="btn btn-sm btn-info">Consultar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection