<?php
// Cancelamento da consulta
header('Content-Type: application/json');
require_once '../database.php';  // Certifique-se de que o arquivo de conexão com o banco de dados esteja correto

// Obtém os dados da requisição JSON
$data = json_decode(file_get_contents('php://input'), true);

// Verifica se o 'appointment_id' foi passado
if (!isset($data['appointment_id']) || empty($data['appointment_id'])) {
    echo json_encode(["success" => false, "message" => "ID da consulta não fornecido."]);
    exit;
}

$appointmentId = $data['appointment_id'];

// Verifica se o ID da consulta realmente existe no banco de dados antes de tentar o cancelamento
$stmt = $conn->prepare("SELECT status FROM agendamentos WHERE id = ?");
$stmt->bind_param('i', $appointmentId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(["success" => false, "message" => "Consulta não encontrada."]);
    exit;
}

$row = $result->fetch_assoc();
$currentStatus = $row['status'];

// Se a consulta já estiver cancelada ou concluída, não é possível cancelar novamente
if ($currentStatus === 'Cancelada' || $currentStatus === 'Concluído') {
    echo json_encode(["success" => false, "message" => "Não é possível cancelar uma consulta que já está cancelada ou concluída."]);
    exit;
}

// Realiza o cancelamento da consulta
$stmt = $conn->prepare("UPDATE agendamentos SET status = 'Cancelada' WHERE id = ?");
$stmt->bind_param('i', $appointmentId);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(["success" => true, "message" => "Consulta cancelada com sucesso."]);
} else {
    echo json_encode(["success" => false, "message" => "Erro ao cancelar a consulta."]);
}

$stmt->close();
$conn->close();
?>