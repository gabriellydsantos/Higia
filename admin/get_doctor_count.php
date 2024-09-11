<?php
include('database.php');

// Consultar a quantidade de pacientes
$sql = "SELECT COUNT(*) AS total FROM doctors";
$result = $conn->query($sql);

// Verificar se há resultado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['total'];
} else {
    echo '0';
}

$conn->close();
?>