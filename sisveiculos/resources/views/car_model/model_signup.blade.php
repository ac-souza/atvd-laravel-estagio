<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>@yield('titulo', 'Novo Modelo') - SisVeículos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href='/img/car_list.png'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/model_signup.css') }}">
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
      <a class="navbar-brand d-inline-flex align-items-center">

        <img class="navbar-logo"></img>

        <span class="fs-4">SisVeículos</span>
      </a>

    </div>
  </nav>
  <div class="main-content">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card p-4 d-inline-flex align-items-center">
            <h2 class="card-title">Cadastre o modelo do veículo</h2>

            <form action="{{ route('modelos.store') }}" method="post" id="signupFormElement">
              @csrf
              <div class="form-group">
                <label>Marca</label>
                <input
                  type="text"
                  name="marca" id="tnb-signup-brand"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: Volkswagen"
                  required>
              </div>
              <div class="form-group">
                <label>Modelo</label>
                <input
                  type="text"
                  name="modelo" id="tnb-signup-model"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: Golf GTI"
                  required>
              </div>
              <button type="submit">
                <span class="button-text">Cadastrar Modelo</span>
                <span class="button-loader"></span>
              </button>
              <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                <a id="tnb-login-dropdown-signup-link" href="{{ route('listarModelos') }}" style="color: #fd0d0d; text-decoration: none;">Cancelar cadastro</a>
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