<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
// Telas (Visualização)
Route::get('/', [AuthController::class, 'telaLogin'])->name('login');
Route::post('/logar', [AuthController::class, 'logar'])->name('logar');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/cadastrar', [UsuarioController::class, 'registrar'])->name('cadastrar');
Route::get('/cadastro', [UsuarioController::class, 'telaCadastro'])->name('cadastro');

// Processamento (Ações dos formulários)
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index'); // Abre a listagem
Route::get('/usuarios/novo', [UsuarioController::class, 'create'])->name('usuarios.create'); // Abre a tela de criar novo
Route::post('/usuarios/salvar', [UsuarioController::class, 'store'])->name('usuarios.store'); // Salva o novo usuário e volta pra lista
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit'); // Abre a tela de edição
Route::post('/usuarios/{id}/atualizar', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/{id}/excluir', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rota Home (só de exemplo para onde o login redireciona)
Route::get('/home', function () {
    return view('home.home');
})->name('home');
