<?php
session_start();
include("../database.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <title>Higia</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f4f4f9;
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

    /* Badge padrão */
    .custom-badge {
        display: inline-block;
        width: 100px;
        /* Define uma largura fixa */
        text-align: center;
        /* Centraliza o texto */
        border: none;
        padding: 8px 0;
        font-size: 0.9em;
        cursor: pointer;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        margin-top: 10px;
    }

    /* Cores específicas para o status */
    .status-completed {
        background-color: #4CAF50;
        /* Verde para "Concluído" */
    }

    .status-incomplete {
        background-color: #f44336;
        /* Vermelho para "Inconcluído" */
    }

    /* Botão de geração de PDF */
    .generate-pdf {
        margin-top: 10px;
        margin-left: 5px;
        padding: 7px 12px;
        background-color: #1a237e;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.2s ease;
        text-decoration: none;
        font-size: 0.9em;

    }

    .generate-pdf:hover {
        background-color: #0d47a1;
    }

    /* Responsividade para dispositivos móveis */
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

        .custom-badge {
            width: 80px;
            /* Ajuste menor para dispositivos móveis */
            padding: 6px 0;
            font-size: 0.8em;
        }
    }
    </style>
</head>

<body>

    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <?php
    $carteirinha = $_SESSION['patients_carteirinha'];

    // Modificação na consulta para ordenar por data e status
    $sql = "SELECT id, doctor, paciente, department, date, status, time 
            FROM agendamentos 
            WHERE carteirinhaPaciente = '$carteirinha'
            ORDER BY 
                CASE WHEN status = 'Concluído' THEN 1 ELSE 0 END, 
                date ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="card-container">';
        
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">
                    <h3>' . htmlspecialchars($row["doctor"]) . '</h3>
                    <p><strong>Carteirinha do paciente:</strong> ' . htmlspecialchars($carteirinha) . '</p>
                    <p><strong>Data:</strong> ' . date("d.m.Y", strtotime($row["date"])) . '</p>
                    <p><strong>Horário:</strong> ' . date("h:i A", strtotime($row["time"])) . '</p>';
            echo '<button class="custom-badge ' . 
                    ($row["status"] == "Concluído" ? 'status-completed' : 'status-incomplete') . 
                    '" onclick="updateStatus(' . $row["id"] . ')">' . htmlspecialchars($row["status"]) . '</button>';
            echo '<a href="comprovante.php?id=' . $row["id"] . '" class="generate-pdf">Comprovante</a>';
            echo '</div>';
        }
        
        echo '</div>'; 
    } else {
        echo "Nenhum dado encontrado.";
    }

    $conn->close();
    ?>

    <br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>