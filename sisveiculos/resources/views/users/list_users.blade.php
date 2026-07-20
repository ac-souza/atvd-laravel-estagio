<h1>Lista de Usuários</h1>
<?php

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-striped table-hover table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Login</th>";
    print "<th>Status</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {

        $status_db = $row->status;

        if ($status_db == 1) {
            $cor_badge = 'bg-success';
            $status_texto = 'Ativo';
        } else {
            $cor_badge = 'bg-secondary';
            $status_texto = 'Inativo';
        }

        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->login . "</td>";

        print "<td><span class='badge " . $cor_badge . "'>" . $status_texto . "</span></td>";

        print "<td>
                            <button onclick=\"location.href='?page=home&aba=edit_users&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir este usuário?')){location.href='?page=save_users&action=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                            </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>