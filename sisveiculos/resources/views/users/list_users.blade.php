@extends('layouts.app')

@section('titulo', 'Lista de Usuários')

<!-- Remove o fundo de imagem específico para esta página (como você fazia no switch) -->
@push('styles')
<style>
    body, .fundo, .main-content { 
        background-color: #f8f9fa !important; 
        background-image: none !important; 
    }
</style>
@endpush

<!-- Injeta o botão no topo da Home -->
@section('botoes_topo')
<div class="d-flex justify-content-end p-3">
    <a href="{{ route('usuarios.create') }}" class="btn btn-dark">Cadastrar novo usuário</a>
</div>
@endsection

<!-- O conteúdo principal (A sua tabela) -->
@section('conteudo')
    <h1>Lista de Usuários</h1>

    <!-- Exibição das mensagens de sucesso/erro que vêm do Controller -->
    @if(session('mensagem'))
        <div class="alert alert-success">{{ session('mensagem') }}</div>
    @endif
    @if(session('erro'))
        <div class="alert alert-danger">{{ session('erro') }}</div>
    @endif

    @if(count($usuarios) > 0)
        <table class='table table-striped table-hover table-bordered mt-3'>
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Inicia o loop (substitui o while($row = $res->fetch_object())) -->
                @foreach($usuarios as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nome }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->login }}</td>
                        
                        <!-- Lógica do Status feita de forma limpa com Blade -->
                        <td>
                            @if($row->status == 1)
                                <span class='badge bg-success'>Ativo</span>
                            @else
                                <span class='badge bg-secondary'>Inativo</span>
                            @endif
                        </td>

                        <!-- Botões de Ação com as novas rotas -->
                        <td>
                            <a href="{{ route('usuarios.edit', $row->id) }}" class='btn btn-success btn-sm'>Editar</a>
                            
                            <a href="{{ route('usuarios.destroy', $row->id) }}" 
                               onclick="return confirm('Tem certeza que deseja excluir este usuário?')" 
                               class='btn btn-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class='alert alert-danger'>Não encontrou resultados!</p>
    @endif
@endsection