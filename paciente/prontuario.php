<?php      
session_start();
include "../database.php";

if (isset($_SESSION['patients_carteirinha'])) {
    $carteirinha = $_SESSION['patients_carteirinha'];

    // Alterar a consulta SQL para pegar o nome do departamento
    $sql = "SELECT ag.id, ag.doctor, d.department_name AS department, ag.date, ag.time, ag.status 
        FROM agendamentos ag
        INNER JOIN departments d ON ag.department = d.id
        WHERE ag.carteirinhaPaciente = ? AND ag.status = 'Concluido' 
        ORDER BY ag.date DESC";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $carteirinha);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Meu Prontuário</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
            }
            .navbar, .footer {
                color: white;
                text-align: left;
            }
            h2 {
                color: #161D53;
                text-align: left;
                margin-top: 3%;
                margin-left: 5%;
            }
            .btn-container {
                display: flex;
                justify-content: flex-start;  
                margin-left: 5%;
                gap: 20px; 
                margin-top: 20px;
            }
            .btn {
                padding: 15px 25px;  /* Aumenta a espessura do botão */
                background-color: #161D53;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                text-decoration: none;
                font-size: 16px;
                font-weight: bold;
            }
            .btn:hover {
                background-color: #0f143b;
            }
            table {
                width: 90%;
                margin: 20px auto;
                border-collapse: collapse;
                background-color: white;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: center;
            }
            th {
                background-color: #161D53;
                color: white;
                font-weight: bold;
            }
            td {
                color: #161D53;
            }
            .no-data {
                text-align: center;
                color: #555;
                font-style: italic;
            }
            .btn-details {
                padding: 5px 10px;
                background-color: #161D53;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                text-decoration: none;
            }
            .btn-details:hover {
                background-color: #0f143b;
            }

            /* Responsividade para dispositivos móveis */
            @media (max-width: 768px) {
                table {
                    width: 100%;
                    font-size: 14px;
                }
                th, td {
                    padding: 8px;
                }
                thead {
                    display: none; 
                }
                tr {
                    display: block;
                    margin-bottom: 10px;
                    border-bottom: 2px solid #ddd;
                }
                td {
                    display: flex;
                    justify-content: space-between;
                    padding: 10px;
                    border: none;
                    position: relative;
                    padding-left: 50%;
                }
                td:before {
                    content: attr(data-label);
                    position: absolute;
                    left: 10px;
                    font-weight: bold;
                    color: #161D53;
                }
                .btn-details {
                    padding: 8px 15px;
                    font-size: 12px;
                }
            }
        </style>
    </head>

    <body>
    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <h2>Meu Prontuário</h2>

    <div class="btn-container">
        <a href="receitas.php" class="btn">Minhas  Receitas</a>
        <a href="encaminhamentos.php" class="btn">Meus  Encaminhamentos</a>
    </div>

    <h2>Consultas realizadas</h2>
    
    <table>
        <thead>
            <tr>
                <th>Médico</th>
                <th>Departamento</th>
                <th>Data</th>
                <th>Horário</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td data-label='Médico'>" . htmlspecialchars($row['doctor']) . "</td>";
                    echo "<td data-label='Departamento'>" . htmlspecialchars($row['department']) . "</td>"; // Agora exibe o nome do departamento
                    echo "<td data-label='Data'>" . htmlspecialchars($row['date']) . "</td>";
                    echo "<td data-label='Horário'>" . htmlspecialchars($row['time']) . "</td>";
                    echo "<td data-label='...'><a class='btn-details' href='detalhes.php?id=" . htmlspecialchars($row['id']) . "'>Comprovante</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='no-data'>Nenhuma consulta concluída encontrada.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    <br><br><br><br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    </body>
    </html>

    <?php
    $conn->close();
} else {
    echo "Erro: Carteirinha do paciente não encontrada.";
}
?>
