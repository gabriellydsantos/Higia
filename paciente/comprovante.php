<?php
include '../database.php';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Agendamento</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    body {
        font-family: 'Montserrat', 'Inter';
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        font-family: 'Montserrat', 'Inter';
        background-color: white;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        padding: 20px;
    }

    .card::before {
        font-family: 'Montserrat', 'Inter';
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background-color: #003d80;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 50%);
        z-index: -1;
    }

    .card p {
        font-family: 'Montserrat', 'Inter';
        margin: 10px 0;
    }

    .card strong {
        font-family: 'Montserrat', 'Inter';
        font-weight: bold;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h2 {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
        line-height: 40px;
    }

    .header img {
        max-height: 40px;
        width: auto;
    }

    #download-pdf {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #003d80;
        color: white;
        cursor: pointer;
    }

    #download-pdf:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            align-items: center;
        }

        .header img {
            margin-bottom: 10px;
        }

        .header h2 {
            text-align: center;
            margin-bottom: 23px;
        }
    }
    </style> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


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
    <br><br>
    <div class="content">
        <div class="card">
            <?php
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);

                $stmt = $conn->prepare("SELECT a.*, d.department_name AS department_name, doc.username AS doctor_name
                                    FROM agendamentos a
                                    JOIN departments d ON a.department = d.id
                                    JOIN doctors doc ON a.doctor = doc.username
                                    WHERE a.id = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $agendamento = $result->fetch_assoc();
                    echo "<div class='header'>";
                    echo "<h2>Comprovante de Agendamento</h2>";
                    echo "<img src='ecommerce/logo (1).png' alt='Logo'>";
                    echo "</div>";
                    echo "<p>Consulta agendada com: <strong>" . htmlspecialchars($agendamento['department_name']) . "</strong></p>";
                    echo "<p>Profissional: <strong> " . htmlspecialchars($agendamento["doctor_name"]) . "</strong></p>";
                    echo "<p>Data da consulta: <strong>" . date('d/m/Y', strtotime($agendamento["date"])) . "</strong></p>";
                    echo "<p>Horario: <strong>" . htmlspecialchars($agendamento["time"]) . "</strong></p>";
                } else {
                    echo "Agendamento não encontrado.";
                }
            } else {
                echo "ID de agendamento não especificado.";
            }
            ?>
            <br>
            <p><strong>Orientações:</strong></p>
            <p>- Favor Levar documentação com foto.</p>
            <p>- Chegar com pelo menos 15 min de antecedência.</p>
        </div>

        <button id='download-pdf'>Baixar Comprovante em PDF</button>
    </div>
    <br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
    document.getElementById('download-pdf').addEventListener('click', function() {
        const element = document.querySelector('.card');
        const options = {
            margin: 1,
            filename: 'comprovante-agendamento.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'portrait'
            }
        };
        html2pdf().from(element).set(options).save();
    });
    </script>
</body>

</html>