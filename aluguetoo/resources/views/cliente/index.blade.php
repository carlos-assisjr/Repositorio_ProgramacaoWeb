@extends('layout')

@section('conteudo')
<h1>Lista de Clientes</h1>

<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cl)
        <tr>
            <td>{{ $cl->id }}</td>
            <td>{{ $cl->nome }}</td>
            <td>{{ $cl->cpf }}</td>
            <td>{{ $cl->telefone }}</td>
            <td>{{ $cl->email }}</td>
            <td>

                <a href="{{ route('clientes.edit', $cl->id) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('clientes.destroy', $cl->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Deseja excluir este cliente?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection