<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Novo Usuário') - SisVeículos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href='/img/car_list.png'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/users_signup.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <style>
        body {
            overflow: hidden !important;
        }
    </style>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="#">

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
                        <h2 class="card-title">Cadastre seu novo usuário</h2>

                        <form action=" {{ route('usuarios.store')}} " method="post" id="signupFormElement">
                            @csrf
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="nome"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Seu Nome"
                                    required>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="login"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Nome de Usuário"
                                    required>
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Seu Email"
                                    required>
                            </div>
                            <div class="form-group tnb-signup-password">
                                <input
                                    type="password"
                                    name="senha" id="tnb-login-password"
                                    autocomplete="current-password"
                                    placeholder="Crie sua senha"
                                    required>
                            </div>
                            <button type="submit">
                                <span class="button-text">Cadastrar Usuário</span>
                                <span class="button-loader"></span>
                            </button>
                            <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                                <a id="tnb-login-dropdown-signup-link" href="{{ route('listarUsuarios') }}" style="color: #fd0d0d; text-decoration: none;">Cancelar cadastro</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>