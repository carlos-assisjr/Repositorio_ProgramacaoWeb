@extends('layout')

@section('conteudo')
    <h1>Lista de Lojas</h1>

    <a href="{{ route('lojas.create') }}" class="btn btn-primary mb-3">Nova Loja</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lojas as $loja)
                <tr>
                    <td>{{ $loja->id }}</td>
                    <td>{{ $loja->nome }}</td>
                    <td>{{ $loja->endereco }}</td>
                    <td>{{ $loja->cidade }}</td>
                    <td>{{ $loja->estado }}</td>
                    <td>{{ $loja->cep }}</td>
                    <td>
                        <a href="{{ route('lojas.show', $loja->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('lojas.edit', $loja->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('lojas.destroy', $loja->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Deseja realmente excluir esta loja?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection