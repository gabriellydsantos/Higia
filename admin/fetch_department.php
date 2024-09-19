<?php
include('database.php');

// Verificar se há uma pesquisa
$query = "";
if (isset($_GET['query'])) {
    $query = $conn->real_escape_string($_GET['query']);
}

// Consultar os dados dos departamentos
$sql = "SELECT id, department_name, doctor_carteirinha, description, department_date, status FROM departments";
if (!empty($query)) {
    $sql .= " WHERE department_name LIKE '%$query%' OR doctor_carteirinha LIKE '%$query%' OR description LIKE '%$query%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>
                <div class='form-check check-tables'>
                    <input class='form-check-input' type='checkbox' value='something'>
                </div>
              </td>";
        echo "<td>" . $row['department_name'] . "</td>";
        echo "<td>" . $row['doctor_carteirinha'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . date("d.m.Y", strtotime($row['department_date'])) . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td class='text-end'>
                <div class='dropdown dropdown-action'>
                    <a href='#' class='action-icon dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
                    <div class='dropdown-menu dropdown-menu-end'>
                        <a class='dropdown-item' href='edit-department.php?id=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square m-r-5'></i> Editar</a>
                        <a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#delete_department'><i class='fa fa-trash-alt m-r-5'></i> Excluir</a>
                    </div>
                </div>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Nenhum departamento encontrado.</td></tr>";
}

$conn->close();
?>