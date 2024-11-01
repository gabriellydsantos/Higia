<?php
include '../database.php'; // Ajuste o caminho para o arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Prepara a declaração
    $stmt = $conn->prepare("UPDATE agendamentos SET status = ? WHERE id = ?");
    
    // Bind dos parâmetros
    $stmt->bind_param("si", $status, $id);

    // Executa a declaração
    if ($stmt->execute()) {
        echo "Status atualizado com sucesso";
    } else {
        echo "Erro ao atualizar status: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
}

$conn->close();
header("Location: appointments.php");
exit();
?>