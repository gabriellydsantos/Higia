<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "200812";
$dbname = "higia";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar os dados dos pacientes
$sql = "SELECT id, first_name, last_name, carteirinha, phone, email, created_at, image FROM patients";
$result = $conn->query($sql);

// Gerar o HTML da tabela
echo '<div class="table-responsive">
        <table class="table border-0 custom-table comman-table datatable mb-0">
            <thead>
                <tr>
                    <th>
                        <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something">
                        </div>
                    </th>
                    <th>Nome</th>
                    <th>Carterinha</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Data de ingresso</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>
                <div class='form-check check-tables'>
                    <input class='form-check-input' type='checkbox' value='something'>
                </div>
              </td>";
        echo "<td class='profile-image'><a href='profile.php'><img width='28' height='28' src='" . $row['image'] . "' class='rounded-circle m-r-5' alt> " . $row['first_name'] . " " . $row['last_name'] . "</a></td>";
        echo "<td>" . $row['carteirinha'] . "</td>";
        echo "<td><a href='javascript:;'>" . $row['phone'] . "</a></td>";
        echo "<td><a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></td>";
        echo "<td>" . date("d.m.Y", strtotime($row['created_at'])) . "</td>";
        echo "<td class='text-end'>
                <div class='dropdown dropdown-action'>
                    <a href='#' class='action-icon dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
                    <div class='dropdown-menu dropdown-menu-end'>
                        <a class='dropdown-item' href='edit-patient.php?id=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square m-r-5'></i> Editar</a>
                        <a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#delete_patient'><i class='fa fa-trash-alt m-r-5'></i> Excluir</a>
                    </div>
                </div>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Nenhum paciente encontrado.</td></tr>";
}

echo '</tbody>
    </table>
</div>';

$conn->close();
?>
