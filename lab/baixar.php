<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higia | PDF</title> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

<body>
    <?php
    include("conexao.php");

    // Verifica se o parâmetro 'id' foi passado na URL e se é um número inteiro
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        http_response_code(400); // Bad Request
        echo "ID inválido ou não fornecido.";
        exit;
    }

    $id = intval($_GET['id']); // Converte o ID para um inteiro para segurança

    // Preparar a consulta SQL com um parâmetro
    $stmt = $mysqli->prepare("SELECT nome_cliente, carteirinha, pdf_arquivo FROM documento WHERE id=?");
    if ($stmt === false) {
        http_response_code(500); // Internal Server Error
        echo "Erro ao preparar a consulta.";
        exit;
    }

    $stmt->bind_param("i", $id); // "i" significa integer

    // Executar a consulta
    if (!$stmt->execute()) {
        http_response_code(500); // Internal Server Error
        echo "Erro ao executar a consulta.";
        exit;
    }

    // Vincular os resultados às variáveis
    $stmt->bind_result($filename, $carteirinha, $pdf_content);

    // Buscar os resultados
    if ($stmt->fetch()) {
        // Limpar o buffer de saída
        ob_clean();

        // Enviar os cabeçalhos corretos para o navegador
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . htmlspecialchars($filename, ENT_QUOTES, 'UTF-8') . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . strlen($pdf_content));

        // Enviar o conteúdo do PDF
        echo $pdf_content;
        exit;
    } else {
        // Se não encontrar o documento, exibe uma mensagem
        http_response_code(404); // Not Found
        echo "Documento não encontrado.";
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $mysqli->close();
    ?>



</body>

</html>