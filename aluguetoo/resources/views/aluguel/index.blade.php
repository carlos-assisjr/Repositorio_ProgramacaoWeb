@extends('layout')

@section('conteudo')
    <h2>Aluguéis</h2>
    <a href="/alugueis/create" class="btn btn-success mb-3">Novo Registro</a>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
               <th>Cliente</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alugueis as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->cliente->nome }}</td>
                <td>{{ $a->status }}</td>
                <td class="d-flex gap-2">
                    <a href="/alugueis/{{ $a->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <a href="/alugueis/{{ $a->id }}" class="btn btn-sm btn-info">Consultar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection