<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo', 'Editar Veículo') - SisVeículos</title>
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
    <div class="main-content">
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card p-4 d-inline-flex align-items-center w-100 shadow-sm">
                        <h2 class="card-title mb-4">Editar seu veículo</h2>

                        <form action="{{ route('veiculos.update') }}" method="post" id="signupFormElement" class="w-100">
                            @csrf
                            <input type="hidden" name="id" value="{{ $veiculo->id }}">

                            <div class="form-group mb-3">
                                <label>Marca / Modelo</label>
                                <select name="modelo_id" id="tbn-signup-modelo" class="form-control" required>
                                    <option value="" disabled>Selecione a marca e o modelo</option>

                                    @if(count($modelos) > 0)
                                    @foreach($modelos as $m)
                                    <option value="{{ $m->id }}" {{ $m->id == $veiculo->modelo_id ? 'selected' : '' }}>
                                        {{ $m->marca }} - {{ $m->modelo }}
                                    </option>
                                    @endforeach
                                    @else
                                    <option value="" disabled>Nenhum modelo cadastrado</option>
                                    @endif

                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Editar Placa</label>
                                <input type="text" name="placa" id="tbn-signup-placa" class="form-control" spellcheck="false" autocapitalize="off" placeholder="Alterar Placa" value="{{ $veiculo->placa }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Editar Cor</label>
                                <input type="text" name="cor" id="tbn-signup-cor" class="form-control" spellcheck="false" autocapitalize="off" placeholder="Alterar Cor" value="{{ $veiculo->cor }}" required>
                            </div>

                            <div class="form-group mb-4">
                                <label>Editar Ano</label>
                                <input type="number" name="ano" id="tbn-signup-ano" class="form-control" spellcheck="false" autocapitalize="off" placeholder="Alterar Ano" value="{{ $veiculo->ano }}" required>
                            </div>

                            <div id="signupStatus" class="status"></div>

                            <button type="submit" class="btn btn-dark w-100 mb-3">
                                <span class="button-text">Confirmar edições</span>
                                <span class="button-loader"></span>
                            </button>

                            <p class="text-center" style="font-size: 0.9rem; margin-top: 10px;">
                                <a id="tnb-login-dropdown-signup-link" href="{{ route('listarVeiculos') }}" style="color: #fd0d0d; text-decoration: none;">Cancelar edição</a>
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