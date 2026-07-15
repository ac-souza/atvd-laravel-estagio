<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../../assets/img/car_list.png">
    <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/model-signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <style>
        body {
            overflow: hidden !important;
        }
    </style>
    <div class="main-content">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card p-4 d-inline-flex align-items-center">
                        <h2 class="card-title">Cadastre seu novo usuário</h2>

                        <form action="?page=save_new_user" method="post" id="signupFormElement">
                            <input type="hidden" name="action" value="register">
                            <div class="form-group">
                                <label>Seu nome</label>
                                <input
                                    type="text"
                                    name="nome"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Ex.: Fulano"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Nome de Usuário</label>
                                <input
                                    type="text"
                                    name="login"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Ex.: fulanozinho"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Digite seu email</label>
                                <input
                                    type="email"
                                    name="email"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Ex.: fulano@teste.com"
                                    required>
                            </div>
                            <div class="form-group tnb-signup-password">
                                <label>Crie sua senha</label>
                                <input
                                    type="password"
                                    name="senha" id="tnb-login-password"
                                    autocomplete="current-password"
                                    placeholder="Senha"
                                    required>
                            </div>
                            <button type="submit">
                                <span class="button-text">Cadastrar Usuário</span>
                                <span class="button-loader"></span>
                            </button>
                            <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                                <a id="tnb-login-dropdown-signup-link" href="?page=home&aba=config_users" style="color: #fd0d0d; text-decoration: none;">Cancelar cadastro</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/users-signup.js"></script>

</body>

</html>