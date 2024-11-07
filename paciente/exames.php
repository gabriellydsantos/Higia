<?php 
session_start(); 

if (!isset($_SESSION['carteirinha'])) {
    header('Location: ../login.php');
    exit;
}

include_once("../database.php");

$user_id = $_SESSION['carteirinha']; 
$query = "SELECT * FROM documento WHERE carteirinha = ?";

$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Erro ao preparar a consulta: " . $conn->error);
}

$stmt->bind_param('s', $user_id); 
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
    <title>Documentos do Cliente</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
    }

    .navbar {
        margin-bottom: 20px;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        padding: 20px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.02);
    }

    .card h3 {
        margin: 0 0 10px;
        font-size: 1.2em;
        color: #1a237e;
    }

    .card p {
        margin: 5px 0;
        color: #333;
    }

    .card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 14px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
        background-color: #FAD939;
        color: #333;
    }

    .card a:hover {
        background-color: #b2ebf2;
    }

    @media (max-width: 600px) {
        body {
            padding: 10px;
        }

        .card {
            padding: 15px;
        }

        .card h3 {
            font-size: 1.1em;
        }
    }
    </style>
</head>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<body>

    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <?php
if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">
                <h3><strong>Enviado para </strong>' . htmlspecialchars($row['nome_cliente']) . '</h3>
                <p><strong>Carterinha:</strong> ' . htmlspecialchars($row['carteirinha']) . '</p>
                <p><strong>Data de envio:</strong> ' . htmlspecialchars($row['data']) . '</p>
                <p><strong>Tipo de Exame:</strong> ' . htmlspecialchars($row['tipo_exame']) . '</p>
                <a href="download.php?id=' . $row['id'] . '">Baixar</a>
              </div>'; 
    }
    
    echo '</div>'; 
} else {
    echo "Nenhum exame encontrado.";
}

$stmt->close();
$conn->close();
?>

    <br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>