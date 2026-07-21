<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Início') - SisVeículos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Ícone e Estilos -->
    <link rel="icon" type="image" href="{{ asset('img/car_list.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Espaço para injetar CSS específico de telas futuras se necessário -->
    @stack('styles')
</head>
<body class="fundo">

    <!-- MENU LATERAL (Sidebar Offcanvas) -->
    <div class="offcanvas offcanvas-end sidebar-customizada" tabindex="-1" id="rightMenu" aria-labelledby="rightMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-3">
            <div class="row g-3">
                <div class="col-12">
                    <a href="{{ route('usuarios.index') }}" class="menu-card btn-usuarios d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">person</i>
                        <span>Usuários</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="#" class="menu-card btn-veiculos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">airport_shuttle</i>
                        <span>Veículos</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="#" class="menu-card btn-modelos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">abc</i>
                        <span>Modelos</span>
                    </a>
                </div>

                <div class="col-12 mt-5">
                    <a href="{{ route('logout') }}" class="menu-card bg-danger d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">logout</i>
                        <span>Sair da conta</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR TOPO -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="{{ route('home') }}">
                <img class="navbar-logo"></img>
                <span class="fs-4">SisVeículos</span>
            </a>

            <button class="navbar-toggler d-inline-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightMenu" aria-controls="rightMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="ms-2">Menu</span>
            </button>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="main-content">
        @yield('botoes_topo')

        <div class="container mt-5">
            @yield('conteudo')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>