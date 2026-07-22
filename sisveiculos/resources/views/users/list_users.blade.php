@extends('layouts.app')

@section('titulo', 'Lista de Usuários')

@push('styles')
<style>
    body,
    .fundo,
    .main-content {
        background-color: #f8f9fa !important;
        background-image: none !important;
    }
</style>
@endpush

@section('botoes_topo')
<div class="d-flex justify-content-end p-3">
    <a href="{{ route('usuarios.create') }}" class="btn btn-dark">Cadastrar novo usuário</a>
</div>
@endsection

@section('conteudo')
<h1>Lista de Usuários</h1>

@if(session('mensagem'))
<div class="alert alert-success">{{ session('mensagem') }}</div>
@endif

@if(session('erro'))
<div class="alert alert-danger">{{ session('erro') }}</div>
@endif

@if(count($usuarios) > 0)
<table class="table table-striped table-hover table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Login</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nome }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->login }}</td>
            <td>
                @if($row->status == 1)
                <span class="badge bg-success">Ativo</span>
                @else
                <span class="badge bg-secondary">Inativo</span>
                @endif
            </td>
            <td>
                <form action="{{ route('usuarios.edit') }}" method="POST" style="display: inline-block;">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <button type="submit" class="btn btn-success btn-sm">Editar</button>
                </form>

                <form action="{{ route('usuarios.destroy') }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p class="alert alert-danger">Não encontrou resultados!</p>
@endif
@endsection