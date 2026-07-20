<h1>Lista de Modelos</h1>
<?php
$sql = "SELECT * FROM modelos";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-striped table-hover table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Modelo</th>";
    print "<th>Marca</th>";
    print "<th>Acões</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->marca . "</td>";
        print "<td>" . $row->modelo . "</td>";
        print "<td>
                        <button onclick=\"location.href='?page=home&aba=edit_models&id=" . $row->id . "'\" class='btn
                            btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir este usuário?')){location.href='?page=save_models&action=excluir&id=" . $row->id . "';}else{false;}\" class='btn
                            btn-danger'>Excluir</button>
                        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>