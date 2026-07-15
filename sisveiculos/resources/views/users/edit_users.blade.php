<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/edit_users.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="main-content">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card p-4 d-inline-flex align-items-center">
                        <h1>Editar Usuário</h1>
                        <?php

                        $sql = "SELECT * FROM usuarios WHERE id = " . $_REQUEST['id'];
                        $res = $conn->query($sql);
                        $row = $res->fetch_object();
                        ?>
                        <form action="?page=save_users" method="post" id="signupFormElement">
                            <input type="hidden" name="action" value="editar">
                            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                            <div class="form-group">
                                <label>Editar nome</label>
                                <input
                                    type="text"
                                    name="nome"
                                    value="<?php echo $row->nome; ?>"
                                    autocomplete="username"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar Nome"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Editar login</label>
                                <input
                                    type="text"
                                    name="login"
                                    value="<?php echo $row->login; ?>"
                                    autocomplete="username"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar nome de usuário"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Editar email</label>
                                <input
                                    type="email"
                                    name="email"
                                    value="<?php echo $row->email; ?>"
                                    autocomplete="email"
                                    spellcheck="false"
                                    autocapitalize="off"
                                    placeholder="Alterar Email"
                                    required>
                            </div>

                            <div class="form-group tnb-signup-password" style="position: relative;">
                                <label>Digite sua senha atual</label>
                                <input
                                    type="password"
                                    name="senha" id="tnb-signup-password"
                                    autocomplete="current-password"
                                    placeholder="Senha"
                                    required>
                            </div>
                            <div id="signupStatus" class="status"></div>
                            <button type="submit">
                                <span class="button-text">Confirmar Edição</span>
                                <span class="button-loader"></span>
                            </button>
                            <p class="switch-form" style="font-size: 0.9rem; margin-top: 10px;">
                                <a id="tnb-login-dropdown-signup-link" href="?page=home&aba=config_users" style="color: #fd0d0d; text-decoration: none;">Cancelar edição</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>