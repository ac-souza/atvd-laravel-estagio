@extends('layouts.app')

@section('titulo', 'Lista de Veículos')

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
    <a href="{{ route('veiculos.create') }}" class="btn btn-dark">Cadastrar novo veículo</a>
</div>
@endsection

@section('conteudo')
<h1>Lista de Veículos</h1>

@if(session('mensagem'))
<div class="alert alert-success">{{ session('mensagem') }}</div>
@endif

@if(session('erro'))
<div class="alert alert-danger">{{ session('erro') }}</div>
@endif

@if(count($veiculos) > 0)
<table class="table table-striped table-hover table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($veiculos as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->modelo->marca }}</td>
            <td>{{ $row->modelo->modelo }}</td>
            <td>{{ $row->placa }}</td>
            <td>{{ $row->cor }}</td>
            <td>{{ $row->ano }}</td>

            <td>
                <form action="{{ route('veiculos.edit') }}" method="POST" style="display: inline-block;">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <button type="submit" class="btn btn-success btn-sm">Editar</button>
                </form>

                <form action="{{ route('veiculos.destroy') }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Tem certeza que deseja excluir este veículo?')">
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