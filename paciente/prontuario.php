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
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar, .footer {
            background-color: #f8f9fa;
            padding: 10px;
        }

        .content {
            padding: 20px;
            margin: 0 40px; 
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .appointment-card {
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 20px; 
        }

        .appointment-card p {
            margin: 10px 0;
        }

        .appointment-card .header {
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
        }

        .details {
            margin-top: 20px;
        }

        .details .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }

        .details .detail-item {
            display: flex;
            justify-content: flex-start;
        }

        .details .detail-item p {
            margin: 0 30px 0 0;
        }

        .details .detail-item p:last-child {
            margin-right: 0;
        }

        .details .detail-item strong {
            font-weight: bold;
        }

        .requests {
            color: blue;
            margin: 10px 0;
            font-weight: normal;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-container button {
            margin: 0 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            background-color: #0056b3;
        }

        .download-certificate {
            background-color: #004085;
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
        <div class="title">Meu Prontuário</div>

        <div class="appointment-card">
            <p class="header">Consulta em: <strong>Ortopedia</strong></p>
            <div class="details">
                <div class="detail-item">
                    <p><strong>Profissional:</strong> Dr. João Silva</p>
                    <p><strong>Data:</strong> 10/08/2024</p>
                    <p><strong>Horário:</strong> 14:00</p>
                </div>
                <div class="detail-item">
                    <p><strong>Paciente:</strong> Maria Souza</p>
                    <p><strong>Idade:</strong> 30</p>
                </div>
                <p><strong>Unidade:</strong> Barueri</p>

                <p class="section-title">Observação do Médico:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel purus eu lorem ultricies bibendum.</p>

                <p class="section-title">Solicitações do Médico:</p>
                <p class="requests">Raio X da coluna</p>
            </div>
            <div class="button-container">
                <button class="download-guide">Baixar Guia do Exame</button>
                <button class="download-certificate">Baixar Atestado</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</body>
</html>
