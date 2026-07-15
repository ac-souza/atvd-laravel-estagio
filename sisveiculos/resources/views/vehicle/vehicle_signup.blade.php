<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href="../../assets/img/car_list.png">
  <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/vehicle_signup.css">
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
            <h2 class="card-title">Cadastre seu veículo</h2>

            <form action="?page=save_vehicles" method="post" id="signupFormElement">
              <input type="hidden" name="action" value="register">
              <div class="form-group">
                <label>Marca / Modelo</label>
                <select name="modelo_id" id="tbn-signup-modelo" required>
                  <option value="" disabled selected>Selecione a marca e o modelo</option>
                  <?php
                  $sqlModelos = "SELECT id, modelo, marca FROM modelos ORDER BY modelo, marca";
                  $resModelos = $conn->query($sqlModelos);

                  if ($resModelos && $resModelos->num_rows > 0) {
                    while ($m = $resModelos->fetch_object()) {
                      echo "<option value='{$m->id}'>{$m->marca} - {$m->modelo}</option>";
                    }
                  } else {
                    echo "<option value='' disabled>Nenhum modelo cadastrado</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Placa</label>
                <input
                  type="text"
                  name="placa" id="tbn-signup-placa"
                  spellcheck=" false"
                  autocapitalize="off"
                  placeholder="Ex.: ABC-1234 ou ABC-1B34"
                  required>
              </div>
              <div class="form-group">
                <label>Cor</label>
                <input
                  type="text"
                  name="cor" id="tbn-signup-cor"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: Azul"
                  required>
              </div>
              <div class="form-group">
                <label>Ano</label>
                <input
                  type="number"
                  name="ano" id="tbn-signup-ano"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Ex.: 1990"
                  required>
              </div>
              <div id="signupStatus" class="status"></div>
              <button type="submit">
                <span class="button-text">Cadastrar Veículo</span>
                <span class="button-loader"></span>
              </button>
              <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                <a id="tnb-login-dropdown-signup-link" href="?page=home&aba=config_vehicle" style="color: #fd0d0d; text-decoration: none;">Cancelar cadastro</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/vehicle-signup.js"></script>

</body>

</html>