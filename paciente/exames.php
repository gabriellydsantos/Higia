<?php 
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['carteirinha'])) {
    // Redireciona para a página de login se não estiver logado
    header('Location: ../login.php');
    exit;
}

include_once("../database.php");

// Prepara a consulta para buscar os exames do usuário logado
$user_id = $_SESSION['carteirinha']; // Supondo que o ID do usuário esteja na sessão
$query = "SELECT * FROM documento WHERE carteirinha = ?"; // Substitua 'patient_id' pelo nome correto da coluna

$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Erro ao preparar a consulta: " . $conn->error);
}

$stmt->bind_param('s', $user_id); // Correção: use $user_id aqui
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nome do Cliente</th><th>Carterinha</th><th>Data</th><th>Tipo de Exame</th><th>Arquivo</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nome_cliente']) . "</td>";
        echo "<td>" . htmlspecialchars($row['carteirinha']) . "</td>";
        echo "<td>" . htmlspecialchars($row['data']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tipo_exame']) . "</td>";
        echo "<td><a href='download.php?id=" . $row['id'] . "'>Baixar</a></td>"; // Link para download do arquivo
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum exame encontrado.";
}

$stmt->close();
$conn->close();
?>
