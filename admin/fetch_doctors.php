                                    <?php
include('database.php');

$query = "";
if (isset($_GET['query'])) {
    $query = $conn->real_escape_string($_GET['query']);
}

$sql = "SELECT id, first_name, last_name, department, phone, email, created_at, image 
        FROM doctors";
if (!empty($query)) {
    $sql .= " WHERE CONCAT(first_name, ' ', last_name) LIKE '%$query%' 
              OR department LIKE '%$query%'
              OR carteirinha LIKE '%$query%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>
                <div class='form-check check-tables'>
                    <input class='form-check-input' type='checkbox' value='something'>
                </div>
              </td>";
        echo "<td class='profile-image'><a href='profile.php?id=" . $row['id'] . "'><img width='28' height='28' src='" . $row['image'] . "' class='rounded-circle m-r-5' alt='Imagem do Médico'> " . $row['first_name'] . " " . $row['last_name'] . "</a></td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td><a href='javascript:;'>" . $row['phone'] . "</a></td>";
        echo "<td><a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></td>";
        echo "<td>" . date("d.m.Y", strtotime($row['created_at'])) . "</td>";
        echo "<td class='text-end'>
                <div class='dropdown dropdown-action'>
                    <a href='#' class='action-icon dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
                    <div class='dropdown-menu dropdown-menu-end'>
                        <a class='dropdown-item' href='edit-doctor.php?id=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square m-r-5'></i> Editar</a>
                        <a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#delete_doctor'><i class='fa fa-trash-alt m-r-5'></i> Excluir</a>
                    </div>
                </div>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Nenhum médico encontrado.</td></tr>";
}

$conn->close();
?>