<h1>Lista de Veículos</h1>
<?php
$sql = "SELECT v.id, v.placa, v.cor, v.ano, m.marca, m.modelo
                    FROM veiculos v
                    INNER JOIN modelos m ON v.modelo_id = m.id";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-striped table-hover table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Placa</th>";
    print "<th>Cor</th>";
    print "<th>Ano</th>";
    print "<th>Marca</th>";
    print "<th>Modelo</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->placa . "</td>";
        print "<td>" . $row->cor . "</td>";
        print "<td>" . $row->ano . "</td>";
        print "<td>" . $row->marca . "</td>";
        print "<td>" . $row->modelo . "</td>";
        print "<td>
                        <button onclick=\"location.href='?page=home&aba=edit_vehicles&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir este veículo?')){location.href='?page=save_vehicles&action=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>