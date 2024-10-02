<?php
include "../database.php";

// Cancelar agendamento
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cancel_id'])) {
    $cancel_id = intval($_POST['cancel_id']);
    $sql_cancel = "DELETE FROM agendamentos WHERE id = $cancel_id";
    if ($conn->query($sql_cancel) === TRUE) {
        echo "<script>alert('Agendamento cancelado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cancelar o agendamento: " . $conn->error . "');</script>";
    }
}

// Reagendar agendamento
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reschedule_id'])) {
    $reschedule_id = intval($_POST['reschedule_id']);
    $new_date = $_POST['new_date'];
    $new_time = $_POST['new_time'];

    $sql_reschedule = "UPDATE agendamentos SET date = '$new_date', time = '$new_time' WHERE id = $reschedule_id";
    if ($conn->query($sql_reschedule) === TRUE) {
        echo "<script>alert('Agendamento reagendado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao reagendar o agendamento: " . $conn->error . "');</script>";
    }
}

// Consultar agendamentos
$sql_agendamentos = "SELECT a.id, a.department, a.date, a.time, d.username 
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
        background-color: #161D53;
    }

    .cancel-btn {
        background-color: #B72345; 
    }

    .details-link {
        font-size: 12px;
        color: blue;
        cursor: pointer;
        text-decoration: underline;
    }

    .reschedule-form {
        display: none;
        flex-direction: column;
        margin-top: 20px; 
        margin-bottom: 20px;
        padding: 10px; 
        border: 1px solid #ccc; 
        border-radius: 5px;
        background-color: #f9f9f9; 
    }

    .reschedule-form input {
        margin: 13px 0; 
        margin-right: 10px;
        padding: 8px; 
        border: 1px solid #ddd; 
        border-radius: 5px; 
    }

    .reschedule-form input[type="time"] {
        margin-top: 10px; 
    }

    .reschedule-form button {
        margin-top: 10px; 
        padding: 10px; 
        background-color: #161D53; 
        color: white; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
    }

    </style>
    <script>
        function toggleRescheduleForm(id) {
            const form = document.getElementById('reschedule-form-' + id);
            form.style.display = form.style.display === 'none' || form.style.display === '' ? 'flex' : 'none';
        }
    </script>
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
                
                // Botão para reagendar
                echo '<button class="reschedule-btn" onclick="toggleRescheduleForm(' . htmlspecialchars($row['id']) . ')">Reagendar</button>';
                // Formulário para cancelar
                echo '<form method="POST" action="">';
                echo '<input type="hidden" name="cancel_id" value="' . htmlspecialchars($row['id']) . '">';
                echo '<button type="submit" class="cancel-btn">Desmarcar</button>';
                echo '</form>';
                echo '</div>'; // appointment-actions
                echo '</div>'; // appointment-card

                // Formulário de Reagendamento (fora do card)
                echo '<div id="reschedule-form-' . htmlspecialchars($row['id']) . '" class="reschedule-form">';
                echo '<form method="POST" action="">';
                echo '<input type="hidden" name="reschedule_id" value="' . htmlspecialchars($row['id']) . '">';
                echo 'Nova Data: <input type="date" name="new_date" required>';
                echo 'Novo Horário: <input type="time" name="new_time" required>';
                echo '<button type="submit" class="reschedule-btn">Confirmar Reagendamento</button>';
                echo '</form>';
                echo '</div>'; // reschedule-form
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
