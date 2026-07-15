<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Início</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../../assets/img/car_list.png">
    <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <div class="offcanvas offcanvas-end sidebar-customizada" tabindex="-1" id="rightMenu" aria-labelledby="rightMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-3">
            <div class="row g-3">
                <div class="col-12">
                    <a href="?page=home&aba=config_users" class="menu-card btn-usuarios d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">person</i>
                        <span>Usuários</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="?page=home&aba=config_vehicle" class="menu-card btn-veiculos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">airport_shuttle</i>
                        <span>Veículos</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="?page=home&aba=config_models" class="menu-card btn-modelos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">abc</i>
                        <span>Modelos</span>
                    </a>
                </div>

                <div class="col-12 mt-5">
                    <a href="?page=logout" class="menu-card bg-danger d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">logout</i>
                        <span>Sair da conta</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="index.php?page=home">

                <img class="navbar-logo"></img>

                <span class="fs-4">SisVeículos</span>
            </a>

            <button class="navbar-toggler d-inline-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightMenu" aria-controls="rightMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="ms-2">Menu</span>
            </button>
    </nav>

    <div class="main-content">
        <?php

        $aba_atual = $_GET['aba'] ?? 'bem_vindo';

        $botoes = [
            'config_models'  => ['texto' => 'Cadastrar novo modelo',  'url' => '?page=home&aba=model-signup',  'classe' => 'btn-dark'],
            'config_users'   => ['texto' => 'Cadastrar novo usuário', 'url' => '?page=home&aba=create_user',   'classe' => 'btn-dark'],
            'config_vehicle' => ['texto' => 'Cadastrar novo veículo', 'url' => '?page=home&aba=vehicle_signup', 'classe' => 'btn-dark']
        ];

        if (array_key_exists($aba_atual, $botoes)) {
            $btn = $botoes[$aba_atual];
            echo '
        <div class="d-flex justify-content-end p-3">
            <button class="btn ' . $btn['classe'] . '" onclick="location.href=\'' . $btn['url'] . '\'">' . $btn['texto'] . '</button>
        </div>';
        }
        ?>
        <div class="container mt-5">
            <?php
            $aba = $_GET['aba'] ?? 'bem_vindo';

            switch ($aba) {
                case 'config_users':
                    echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';

                    require "../functions/users/config_users.php";
                    break;

                case 'config_vehicle':
                    echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';

                    require "../functions/vehicle/config_vehicle.php";
                    break;

                case 'config_models':
                    echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';
                    require "../functions/models/config_models.php";
                    break;

                case 'model-signup':
                    echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';
                    require "../pages/car-model/model-signup.php";
                    break;


                case 'vehicle_signup':
                    echo '<style>
                                body, .fundo, .main-content { 
                                    background-color: #f8f9fa !important; 
                                    background-image: none !important; 
                                    }
                                    </style>';
                    require "../pages/vehicle/vehicle_signup.php";
                    break;

                case 'create_user':
                    echo '<style>
                                    body, .fundo, .main-content { 
                                    background-color: #f8f9fa !important; 
                                    background-image: none !important; 
                                    }
                                    </style>';
                    require "../pages/users/create_user.php";
                    break;

                case 'edit_users':
                    echo '<style>
                                body, .fundo, .main-content { 
                                    background-color: #f8f9fa !important; 
                                    background-image: none !important; 
                                    }
                                    </style>';
                    require "../pages/users/edit_users.php";
                    break;

                case 'edit_models':
                    echo '<style>
                                body, .fundo, .main-content { 
                                    background-color: #f8f9fa !important; 
                                    background-image: none !important; 
                                    }
                                    </style>';
                    require "../pages/car-model/edit_models.php";
                    break;

                case 'edit_vehicles':
                    echo '<style>
                                body, .fundo, .main-content { 
                                    background-color: #f8f9fa !important; 
                                    background-image: none !important; 
                                    }
                                    </style>';
                    require "../pages/vehicle/edit_vehicles.php";
                    break;

                case 'bem_vindo':
                default:
                    break;
            }
            ?>
        </div>
    </div>
    </div>
    </div>

    <script src="../../assets/vendor/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>