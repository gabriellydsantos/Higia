<?php
session_start();
include("../database.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página</title>
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
        .custom-badge {
            border: none;
            padding: 8px 14px;
            font-size: 0.9em;
            cursor: pointer;
            border-radius: 12px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            display: inline-block;
        }
        .status-blue {
            background-color: #1a237e;
        }
        .status-pink {
            background-color: #FAD939;
            color: #333;
        }
        .generate-pdf {
            margin-top: 10px;
            margin-left: 5px;
            padding: 7px 12px;
            background-color: #1a237e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .generate-pdf:hover {
            background-color: #b2ebf2;
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
                padding: 6px 10px;
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
$sql = "SELECT id, doctor, paciente, department, date, status, time FROM agendamentos WHERE carteirinhaPaciente = '$carteirinha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">
                <h3>' . htmlspecialchars($row["doctor"]) . '</h3>
                <p><strong>Carteirinha do paciente:</strong> ' . htmlspecialchars($carteirinha) . '</p>
                <p><strong>Data:</strong> ' . date("d.m.Y", strtotime($row["date"])) . '</p>
                <p><strong>Horário:</strong> ' . date("h:i A", strtotime($row["time"])) . '</p>';
        echo '<button id="status-btn" class="custom-badge ' . 
                ($row["status"] == "Concluído" ? 'status-blue' : 'status-pink') . 
                '" onclick="updateStatus(' . $row["id"] . ')">' . htmlspecialchars($row["status"]) . '</button>';
        // Modificado: botão que direciona para a página de comprovante
        echo '<a href="comprovante.php?id=' . $row["id"] . '" class="generate-pdf">Comprovante</a>';
        echo '</div>'; // Fim do card
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
