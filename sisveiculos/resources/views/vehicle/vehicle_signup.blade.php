<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>@yield('titulo', 'Novo Veículo') - SisVeículos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href='/img/car_list.png'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/vehicle_signup.css') }}">
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
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card p-4 d-inline-flex align-items-center w-100 shadow-sm">
            <h2 class="card-title mb-4">Cadastre seu veículo</h2>

            <form action="{{ route('veiculos.store') }}" method="post" id="signupFormElement" class="w-100">
              @csrf
              <div class="form-group mb-3">
                <label>Marca / Modelo</label>
                <select name="modelo_id" id="tbn-signup-modelo" class="form-control" required>
                  <option value="" disabled selected>Selecione a marca e o modelo</option>

                  @if(count($modelos) > 0)
                  @foreach ($modelos as $m)
                  <option value="{{ $m->id }}">{{ $m->marca }} - {{ $m->modelo }}</option>
                  @endforeach
                  @else
                  <option value="" disabled>Nenhum modelo cadastrado</option>
                  @endif

                </select>
              </div>

              <div class="form-group mb-3">
                <label>Placa</label>
                <input
                  type="text"
                  name="placa"
                  id="tbn-signup-placa"
                  class="form-control"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: ABC-1234 ou ABC-1B34"
                  required>
              </div>

              <div class="form-group mb-3">
                <label>Cor</label>
                <input
                  type="text"
                  name="cor"
                  id="tbn-signup-cor"
                  class="form-control"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: Azul"
                  required>
              </div>

              <div class="form-group mb-4">
                <label>Ano</label>
                <input
                  type="number"
                  name="ano"
                  id="tbn-signup-ano"
                  class="form-control"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: 1990"
                  required>
              </div>

              <button type="submit" class="btn btn-dark w-100 mb-3">
                <span class="button-text">Cadastrar Veículo</span>
                <span class="button-loader"></span>
              </button>

              <p class="text-center" style="font-size: 0.9rem; margin-top: 10px;">
                <a id="tnb-login-dropdown-signup-link" href="{{ route('listarVeiculos') }}" style="color: #fd0d0d; text-decoration: none;">Cancelar cadastro</a>
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