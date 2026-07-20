<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\UsuarioController;
    // Telas (Visualização)
    Route::get('/', [AuthController::class, 'telaLogin'])->name('login');
    Route::post('/logar', [AuthController::class, 'logar'])->name('logar');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Processamento (Ações dos formulários)
    Route::post('/cadastrar', [UsuarioController::class, 'registrar'])->name('cadastrar');
    Route::get('/cadastro', [UsuarioController::class, 'telaCadastro'])->name('cadastro');
    Route::post('/usuarios/{id}/atualizar', [UsuarioController::class, 'update'])->name('usuarios.update');
    Route::get('/usuarios/{id}/excluir', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

    // Rota Home (só de exemplo para onde o login redireciona)
    Route::get('/home', function () {
        return "Bem vindo à Home!"; // Depois criaremos a view da home
    })->name('home');
?>