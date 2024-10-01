<?php
include "../database.php";

// Consultar agendamentos
$sql_agendamentos = "SELECT a.department, a.date, a.time, d.username 
                     FROM agendamentos a 
                     JOIN doctors d ON a.doctor = d.username";
$result_agendamentos = $conn->query($sql_agendamentos);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Agendadas</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .navbar,
    .footer {
        background-color: #f8f9fa;
        padding: 10px;
    }

    .content {
        padding: 20px;
    }

    .title {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .appointment-card {
        border: 1px solid black;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .appointment-info {
        max-width: 70%;
    }

    .appointment-info p {
        margin: 5px 0;
    }

    .appointment-actions {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .appointment-actions button {
        margin: 5px 0;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: white;
    }

    .reschedule-btn {
        background-color: blue;
    }

    .cancel-btn {
        background-color: red;
    }

    .details-link {
        font-size: 12px;
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>
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

    <div class="content">
        <div class="title">Consultas Agendadas</div>

        <?php
        // Verifica se há agendamentos para exibir
        if ($result_agendamentos->num_rows > 0) {
            // Exibe cada agendamento em um card
            while ($row = $result_agendamentos->fetch_assoc()) {
                echo '<div class="appointment-card">';
                echo '<div class="appointment-info">';
                echo '<p>Consulta em: <strong>' . htmlspecialchars($row['department']) . '</strong> <span class="details-link">Ver detalhes</span></p>';
                echo '<p>Data: <strong>' . date('d/m/Y', strtotime($row['date'])) . '</strong></p>';
                echo '<p>Horário: <strong>' . htmlspecialchars($row['time']) . '</strong></p>';
                echo '<p>Profissional: <strong> ' . htmlspecialchars($row['username']) . '</strong></p>';
                echo '</div>';
                echo '<div class="appointment-actions">';
                echo '<button class="reschedule-btn">Reagendar</button>';
                echo '<button class="cancel-btn">Desmarcar</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>Nenhum agendamento encontrado.</p>';
        }
        ?>
    </div>

    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>