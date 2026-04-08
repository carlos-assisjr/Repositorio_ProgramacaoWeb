@extends('layout')

@section('conteudo')
<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
    </div>

    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="endereco" class="form-control" value="{{ $cliente->endereco }}" required>
    </div>

    <div class="mb-3">
        <label>CPF:</label>
        <input type="text" name="cpf" class="form-control" value="{{ $cliente->cpf }}" required>
    </div>

    <div class="mb-3">
        <label>Telefone:</label>
        <input type="text" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
    </div>

    <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-primary">Atualizar</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection