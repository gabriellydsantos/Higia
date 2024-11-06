<?php   
session_start(); 

if (!isset($_SESSION['carteirinha'])) {
    header('Location: ../login.php');
    exit;
}

include_once("../database.php");

$user_id = $_SESSION['carteirinha']; 
// Ordenando pela data de envio de forma decrescente (mais recente primeiro)
$query = "SELECT * FROM receita WHERE carteirinha = ? ORDER BY created_at DESC";

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
    <title>Minhas Receitas</title>
    <style>
    /* Estilo para garantir o rodapé fixo */
    html,
    body {
        height: 100%;
        /* Definir altura total para HTML e body */
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        display: flex;
        flex-direction: column;
    }

    body {
        flex: 1;
        /* Isso faz o conteúdo crescer para preencher o espaço restante */

    }

    h2 {
        color: #161D53;
        margin-top: 3%;
    }

    .navbar {
        margin-bottom: 20px;
    }

    /* Container para o título e o botão */
    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 3%;
    }

    /* Botão de voltar */
    .back-button {
        background-color: #161D53;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        font-size: 16px;
    }

    .back-button:hover {
        background-color: #0d1b35;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(40%, 1fr));
        gap: 20px;
        margin: 20px;
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
        background-color: #FAD939;
        color: #333;
        transition: background-color 0.3s;
    }

    .card a:hover {
        background-color: #b2ebf2;
    }

    /* Rodapé */
    .footer {
        background-color: #161D53;
        padding: 10px;
        text-align: center;
        color: white;
        margin-top: auto;
        /* Isso empurra o footer para o final */
    }

    /* Estilo para telas pequenas */
    @media (max-width: 600px) {
        body {
            padding: 10px;
        }

        .card-container {
            grid-template-columns: repeat(auto-fill, minmax(90%, 1fr));
            /* 90% em telas pequenas */
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

<body>

    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <!-- Container para o título e o botão -->
    <div class="header-container">
        <h2>Minhas receitas</h2>
        <a href="prontuario.php" class="back-button">Voltar ao Prontuário</a>
    </div>

    <?php
if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">
                <h3><strong>Enviada por:</strong> ' . htmlspecialchars($row['doctor']) . '</h3>
                <p><strong>Nome do paciente:</strong> ' . htmlspecialchars($row['nome']) . '</p>
                <p><strong>Receita:</strong> ' . nl2br(htmlspecialchars($row['receita'])) . '</p>
                <p><strong>Data de envio:</strong> ' . htmlspecialchars($row['created_at']) . '</p>
              </div>'; 
    }
    
    echo '</div>'; 
} else {
    echo "<p style='text-align: center; color: #555;'>Nenhuma receita encontrada.</p>";
}

$stmt->close();
$conn->close();
?>

    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>

</body>

</html>