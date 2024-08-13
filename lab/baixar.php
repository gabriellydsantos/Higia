<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higia | PDF</title>
</head>
<body>
<?php
include("conexao.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT pdf_arquivo FROM documento WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->bind_result($pdf_arquivo);
        $stmt->fetch();
        
        if ($pdf_arquivo) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="exame.pdf"');
            echo $pdf_arquivo;
        } else {
            echo "Arquivo não encontrado.";
        }
        
        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta.";
    }
    
    $mysqli->close();
} else {
    echo "ID não fornecido.";
}
?>

</body>
</html>