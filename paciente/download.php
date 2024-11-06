<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['carteirinha'])) {
    header('Location: ../login.php');
    exit;
}

include_once("../database.php");

// Verifique se o ID do documento foi passado na URL
if (!isset($_GET['id'])) {
    die("Documento não especificado.");
}

$id = $_GET['id'];

// Consulta o documento no banco de dados
$query = "SELECT nome_cliente, pdf_arquivo FROM documento WHERE id = ?";
$stmt = $conn->prepare($query);

if (!$stmt) {
    die("Erro ao preparar a consulta: " . $conn->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Verifique se o documento existe
if ($result->num_rows === 0) {
    die("Documento não encontrado.");
}

$row = $result->fetch_assoc();
$pdfData = $row['pdf_arquivo'];

// Defina os headers para o download do arquivo PDF
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $row['nome_cliente'] . '.pdf"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($pdfData));

// Envia o PDF diretamente para o usuário
echo $pdfData;
exit;
?>