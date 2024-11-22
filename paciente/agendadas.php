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
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>

    <title>Higia</title>
    <style>
    /* Aqui vai o estilo da página */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f4f4f9;
    }

    .navbar {
        margin-bottom: 20px;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: flex-start;
        padding: 20px;
    }

    .card-container-right {
        justify-content: flex-end;
        /* Alinha à direita */
    }

    .card {
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        padding: 20px;
        width: 300px;
        transition: transform 0.2s, box-shadow 0.2s;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
        margin: 0 0 10px;
        font-size: 1.3em;
        color: #1a237e;
    }

    .card p {
        margin: 5px 0;
        color: #333;
        line-height: 1.4;
    }

    .custom-badge {
        padding: 8px 12px;
        font-size: 0.9em;
        font-weight: bold;
        color: white;
        border-radius: 5px;
        margin-top: 10px;
        text-align: center;
    }

    .status-completed {
        background-color: #28a745;
    }

    .status-incomplete {
        background-color: #FF9800;
    }

    .status-canceled {
        background-color: #dc3545;
    }

    .generate-pdf,
    .cancel-button {
        margin-top: 10px;
        padding: 10px 15px;
        border-radius: 5px;
        text-align: center;
        font-size: 0.9em;
        text-decoration: none;
        color: white;
        align-self: stretch;
        cursor: pointer;
        border: none;
        /* Remove a borda do botão */
    }

    .generate-pdf {
        background-color: #1a237e;
    }

    .generate-pdf:hover {
        background-color: #0d47a1;
    }

    .cancel-button {
        background-color: #FF5733;
    }

    .cancel-button.disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <script>
    function cancelAppointment(appointmentId, status) {
        if (status === "Concluído" || status === "Cancelada") {
            alert("Não é possível cancelar uma consulta que já está concluída ou foi cancelada.");
        } else if (status === "Inconcluído") {
            if (confirm("Tem certeza de que deseja cancelar esta consulta?")) {
                fetch("cancel_appointment.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            appointment_id: appointmentId
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.message);
                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Erro:", error);
                        alert("Ocorreu um erro ao cancelar a consulta.");
                    });
            }
        }
    }
    </script>

    <?php
    if (!isset($_SESSION['patients_carteirinha'])) {
        echo "<p>Erro: Carteirinha do paciente não encontrada na sessão.</p>";
        exit;
    }

    $carteirinha = $_SESSION['patients_carteirinha'];

    if (!$conn) {
        echo "<p>Erro ao conectar ao banco de dados.</p>";
        exit;
    }

    $stmt = $conn->prepare(
        "SELECT id, doctor, paciente, department, date, status, time 
         FROM agendamentos 
         WHERE carteirinhaPaciente = ? 
         ORDER BY 
            CASE WHEN status = 'Cancelada' THEN 1 ELSE 0 END, 
            date ASC, time ASC"
    );

    if (!$stmt) {
        echo "<p>Erro ao preparar a consulta.</p>";
        exit;
    }

    $stmt->bind_param('s', $carteirinha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<div class="card-container">';
        while ($row = $result->fetch_assoc()) {
            $id = htmlspecialchars($row["id"]);
            $doctor = htmlspecialchars($row["doctor"]);
            $date = htmlspecialchars(date("d.m.Y", strtotime($row["date"])));
            $time = htmlspecialchars(date("H:i", strtotime($row["time"])));
            $status = htmlspecialchars($row["status"]);

            $statusClass = '';
            if ($status === "Concluído") {
                $statusClass = 'status-completed';
            } elseif ($status === "Inconcluído") {
                $statusClass = 'status-incomplete';
            } elseif ($status === "Cancelada") {
                $statusClass = 'status-canceled';
            }

            // Exibe o botão de cancelamento
            $cancelButtonClass = ($status === 'Concluído' || $status === 'Cancelada') ? 'cancel-button disabled' : 'cancel-button';
            $cancelButtonText = ($status === 'Concluído' || $status === 'Cancelada') ? 'Cancelamento não disponível' : 'Cancelar';

            // Adiciona a classe card-container-right para consultas canceladas
            $cardClass = ($status === 'Cancelada') ? 'card-container-right' : '';

            echo '<div class="card ' . $cardClass . '">
                    <h3>' . $doctor . '</h3>
                    <p><strong>Data:</strong> ' . $date . '</p>
                    <p><strong>Horário:</strong> ' . $time . '</p>
                    <span class="custom-badge ' . $statusClass . '">' . $status . '</span>
                    <a href="comprovante.php?id=' . $id . '" class="generate-pdf">Comprovante</a>
                    <button class="' . $cancelButtonClass . '" onclick="cancelAppointment(' . $id . ', \'' . $status . '\')">' . $cancelButtonText . '</button>
                </div>';
        }
        echo '</div>';
    } else {
        echo "<p>Nenhum dado encontrado.</p>";
    }

    $stmt->close();
    $conn->close();
    ?>

    <br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>