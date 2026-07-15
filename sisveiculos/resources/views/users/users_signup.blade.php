<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href="../../assets/img/car_list.png">
  <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/users_signup.css">
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

        <span class="navbar-logo"></span>

        <span class="fs-4">SisVeículos</span>
      </a>

    </div>
  </nav>

  <div class="main-content">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card p-4">
            <h2 class="card-title">Cadastre seu usuário SisVeículos</h2>

            <form action="?page=save_users" method="post" id="signupFormElement">
              <input type="hidden" name="action" value="register">
              <div class="form-group">
                <input
                  type="text"
                  name="nome" id="tnb-signup-username"
                  autocomplete="username"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Nome"
                  required>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="login" id="tnb-signup-loginusrname"
                  autocomplete="username"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Nome de usuário"
                  required>
              </div>

              <div class="form-group">
                <input
                  type="email"
                  name="email" id=" tnb-signup-email"
                  autocomplete="email"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Email"
                  required>
              </div>

              <div class="form-group tnb-signup-password" style="position: relative;">
                <input
                  type="password"
                  name="senha" id="tnb-signup-password"
                  autocomplete="current-password"
                  placeholder="Senha"
                  required>
              </div>
              <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                Já possui uma conta? <a id="tnb-login-dropdown-signup-link" href="?page=login" style="color: #0d6efd; text-decoration: none;">Entrar</a>
              </p>
              <div id="signupStatus" class="status"></div>
              <button type="submit">
                <span class="button-text">Criar Usuário</span>
                <span class="button-loader"></span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/users_signup.js"></script>

</body>

</html>