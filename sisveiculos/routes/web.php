<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\VeiculoController;

//Autenticação
Route::get('/', [AuthController::class, 'telaLogin'])->name('login');
Route::post('/logar', [AuthController::class, 'logar'])->name('logar');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/cadastrar', [UsuarioController::class, 'registrar'])->name('cadastrar');
Route::get('/cadastro', [UsuarioController::class, 'telaCadastro'])->name('cadastro');
Route::get('/home', [AuthController::class, 'home'])->name('home');

//Usuários
Route::get('/usuarios', [UsuarioController::class, 'listar_usuarios'])->name('listarUsuarios');
Route::get('/usuarios/novo', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/salvar', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::post('/usuarios/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::post('/usuarios/atualizar', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::post('/usuarios/excluir', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

//Modelos
Route::get('/modelos', [ModeloController::class, 'listar_modelos'])->name('listarModelos');
Route::get('/modelos/novo', [ModeloController::class, 'create'])->name('modelos.create');
Route::post('/modelos/salvar', [ModeloController::class, 'store'])->name('modelos.store');
Route::post('/modelos/editar', [ModeloController::class, 'edit'])->name('modelos.edit');
Route::post('/modelos/atualizar', [ModeloController::class, 'update'])->name('modelos.update');
Route::post('/modelos/excluir', [ModeloController::class, 'destroy'])->name('modelos.destroy');

//Veículos
Route::get('/veiculos', [VeiculoController::class, 'listar_veiculos'])->name('listarVeiculos');
Route::get('/veiculos/novo', [VeiculoController::class, 'create'])->name('veiculos.create');
Route::post('/veiculos/salvar', [VeiculoController::class, 'store'])->name('veiculos.store');
Route::post('/veiculos/editar', [VeiculoController::class, 'edit'])->name('veiculos.edit');
Route::post('/veiculos/atualizar', [VeiculoController::class, 'update'])->name('veiculos.update');
Route::post('/veiculos/excluir', [VeiculoController::class, 'destroy'])->name('veiculos.destroy');
