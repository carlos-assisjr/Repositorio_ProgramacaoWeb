@extends('layout')

@section('conteudo')
<h1>Detalhes do Cliente</h1>
<form method="post" action="/clientes/{{ $cliente->id }}">
    @csrf
    @method('DELETE')
    <div class="mb-3">
        <p><strong>ID:</strong> {{ $cliente->id }}</p>
    </div>
    <div class="mb-3">

        <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    </div>
    <div class="mb-3">
        <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
    </div>
    <div class="mb-3">
        <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
    </div>
    <div class="mb-3">
        <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    </div>
    <div class="mb-3">
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
    </div>
    </div>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning mt-3">Editar</a>
    @endsection