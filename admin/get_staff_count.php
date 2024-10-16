<?php
include('database.php'); // Inclua seu arquivo de conexão ao banco de dados

// Consultar a quantidade de funcionários
$sql = "SELECT COUNT(*) AS total FROM staff";
$result = $conn->query($sql);

// Verificar se há resultado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['total']; // Retorna o total de funcionários
} else {
    echo '0'; // Se não houver registros, retorna 0
}

$conn->close(); // Fecha a conexão
?>