<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>SisVeículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../../assets/img/car_list.png">
    <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="#">
                <img class="navbar-logo"></img>
                <span class="fs-4">SisVeículos</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-inline-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="material-icons">person</i> Minha Conta
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="tnb-login-dropdown-form-container" id="tnb-login-dropdown-loginForm">
                                <div class="auth-header">
                                    <div class="auth-title" style="font-weight: bold; font-size: 1.2rem;">Entrar</div>
                                    <div class="auth-subtitle" style="font-size: 0.85rem; color: #6c757d; margin-bottom: 10px;">Acesse sua conta e gerencie seus veículos</div>
                                </div>

                                <p class="switch-form" style="font-size: 0.9rem;">
                                    Não tem uma conta? <a id="tnb-login-dropdown-signup-link" href="?page=users_signup" style="color: #0d6efd; text-decoration: none;">Cadastre-se</a>
                                </p>

                                <form action="?page=authenticator" method="post" id="loginFormElement">
                                    <input type="hidden" name="action" value="logar">
                                    <div class="form-group mb-3">
                                        <input
                                            type="text"
                                            name="login" id=" tnb-login-dropdown-loginusrname"
                                            autocomplete="email"
                                            spellcheck="false"
                                            autocapitalize="off"
                                            placeholder="Nome de usuário"
                                            required>
                                    </div>

                                    <div class="form-group tnb-login-dropdown-password-container mb-3" style="position: relative;">
                                        <input
                                            type="password"
                                            name="senha" id="tnb-login-dropdown-password"
                                            autocomplete="current-password"
                                            placeholder="Senha"
                                            required
                                            style="padding-right: 40px;">
                                    </div>

                                    <div id="loginStatus" class="status"></div>
                                    <button type="submit">
                                        <span class="button-text">Entrar</span>
                                        <span class="button-loader"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="backgroundCarousel" class="carousel slide carousel-fade bg-carousel" data-bs-ride="carousel" data-bs-interval="10000" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active bg-lightoff">
            </div>

            <div class="carousel-item bg-lighton">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="prev">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <script src="../../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/login.js"></script>

</body>

</html>