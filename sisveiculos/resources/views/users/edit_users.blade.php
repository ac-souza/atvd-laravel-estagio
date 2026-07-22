<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Editar Usuário') - SisVeículos</title>
    <link rel="icon" type="image" href='/img/car_list.png'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/edit_users.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center">

                <img class="navbar-logo"></img>

                <span class="fs-4">SisVeículos</span>
            </a>

        </div>
    </nav>
    <div class="main-content">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4">
                        <h1>Editar Usuário</h1>
                        <form action="{{ route('usuarios.update') }}" method="post" id="signupFormElement" class="w-100">
                            @csrf
                            <input type="hidden" name="id" value="{{ $usuario->id }}">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="nome"
                                    autocomplete="username"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar Nome"
                                    required>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="login"
                                    autocomplete="username"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar nome de usuário"
                                    required>
                            </div>

                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    autocomplete="email"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar Email"
                                    required>
                            </div>

                            <div class="form-group tnb-signup-password" style="position: relative;">
                                <input
                                    type="password"
                                    name="senha" id="tnb-signup-password"
                                    autocomplete="current-password"
                                    placeholder="Digite sua senha atual"
                                    required>
                            </div>
                            <div id="signupStatus" class="status"></div>
                            <button type="submit">
                                <span class="button-text">Confirmar Edição</span>
                                <span class="button-loader"></span>
                            </button>
                            <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                                <a id="tnb-login-dropdown-signup-link" href="{{ route('listarUsuarios') }}" style="color: #fd0d0d; text-decoration: none;">Cancelar edição</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>