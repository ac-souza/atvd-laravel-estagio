<?php
session_start();
require_once "../functions/connection.php";

$pagina = $_GET['page'] ?? 'login';
if ($pagina === 'home' && !isset($_SESSION["logado"])) {

    $pagina = 'login';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../assets/img/car_list.png">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <title>SisVeículos</title>

    <?php
    if (file_exists("../assets/css/$pagina.css")) {
        echo '<link rel="stylesheet" href="../assets/css/' . $pagina . '.css">';
    }

    if ($pagina === 'home') {
        foreach (['create-user', 'model-signup', 'vehicle-signup', 'edit_users'] as $extra) {
            if (file_exists("../assets/css/$extra.css")) {
                echo '<link rel="stylesheet" href="../assets/css/' . $extra . '.css">';
            }
        }
    }
    ?>
</head>

<body class="fundo">

    <?php

    switch ($pagina) {

        case 'login':
            require "../pages/users/login.php";
            break;

        case 'authenticator':
            require "../functions/authentication/authenticator.php";
            break;

        case 'logout':
            require "../functions/authentication/logout.php";
            break;

        case 'home':
            require "../pages/home/home.php";
            break;

        case 'users_signup':
            require "../pages/users/users_signup.php";
            break;

        case 'model-signup':
            require "../pages/car-model/model-signup.php";
            break;

        case 'vehicle_signup':
            require "../pages/vehicle/vehicle_signup.php";
            break;

        case 'create_user':
            require "../pages/create_user.php";
            break;

        case 'save_users':
            require "../functions/users/save_users.php";
            break;

        case 'save_models':
            require "../functions/models/save_models.php";
            break;

        case 'save_vehicles':
            require "../functions/vehicle/save_vehicles.php";
            break;

        case 'save_new_user':
            require "../functions/users/save_new_user.php";
            break;

        case 'config-models':
            require "../functions/config-models.php";
            break;

        case 'config-users':
            require "../functions/config-users.php";
            break;

        case 'config-vehicle':
            require "../functions/config_vehicle.php";
            break;

        case 'edit_users':
            require "../pages/users/edit_users.php";
            break;

        case 'edit_models':
            require "../pages/car-model/edit_models.php";
            break;

        case 'edit_vehicles':
            require "../pages/vehicle/edit_vehicles.php";
            break;

        default:
            echo "<h2>Página não encontrada.</h2>";
    }

    ?>

    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>

</body>

</html>