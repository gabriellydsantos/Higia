<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Agendamento</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px; /* Altura da forma geométrica azul */
            background-color: #003d80;
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 50%);
            z-index: -1;
        }

        .card .header {
            height: 60px;
            background-color: #0056b3;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 60%);
        }

        .card .header-content {
            color: white;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .card p {
            margin: 10px 0;
        }

        .card .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }

        .card .detail-item {
            display: flex;
            justify-content: space-between;
        }

        .card .detail-item p {
            margin: 0 10px 0 0;
        }

        .card .detail-item p:last-child {
            margin-right: 0;
        }

        .card .detail-item strong {
            font-weight: bold;
        }

        .observations {
            margin-top: 20px;
        }

        .observations p {
            margin: 5px 0;
        }
    </style>
</head>
<div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>
<body>
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
    <div class="title">Comprovante de agendamento</div>

    <div class="content">
        <div class="card">
            <div class="header">
                <div class="header-content"></div>
            </div>
            <p><strong>Nome do Paciente:</strong> [Nome do paciente]</p>
            <div class="detail-item">
                <p><strong>Data:</strong> 05 de maio de 2024</p>
                <p><strong>Hora:</strong> 10:00</p>
            </div>
            <p><strong>Especialidade:</strong> [Especialidade médica]</p>
            <hr>
            <p><strong>Médico:</strong> [Nome do médico]</p>
            <p><strong>Clínica:</strong> [Nome da clínica]</p>
            <p><strong>Endereço:</strong> [Endereço da clínica]</p>
            <p><strong>Telefone:</strong> [Telefone da clínica]</p>
            <hr>
            <div class="observations">
                <p><strong>Observações</strong></p>
                <p>Por favor, chegue 15 minutos antes do horário agendado.</p>
                <p>Em caso de cancelamento, favor entrar em contato com a clínica.</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</body>
</html>
