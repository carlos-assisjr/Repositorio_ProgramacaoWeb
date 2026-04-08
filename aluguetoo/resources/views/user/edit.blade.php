@extends('layout')

@section('conteudo')
    <h1>Editar Usuário</h1>
    <form method="post" action="/users/{{ $user->id }}">
        @CSRF
        @METHOD('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Informe o nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required value="{{ $user->nome }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Informe o e-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Informe a senha:</label>
            <input type="text" id="senha" name="senha" class="form-control" required value="{{ $user->senha }}">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Informe o tipo:</label>
            <select name="tipo" id="tipo" class="form-select" required>
                <option value="CLIENTE" {{ $user->tipo == 'CLIENTE' ? 'selected' : '' }}>CLIENTE</option>
                <option value="LOCADOR" {{ $user->tipo == 'LOCADOR' ? 'selected' : '' }}>LOCADOR</option>
                <option value="ADMIN" {{ $user->tipo == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection