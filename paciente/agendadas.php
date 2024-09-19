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

        .navbar, .footer {
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
    </div><br><br>
    <div class="content">
        <div class="title">Consultas Agendadas</div>

        <div class="appointment-card">
            <div class="appointment-info">
                <p>Consulta em: <strong>Ortopedia</strong> <span class="details-link">Ver detalhes</span></p>
                <p>Data: <strong>10/08/2024</strong></p>
                <p>Horário: <strong>14:00</strong></p>
                <p>Profissional: <strong>Dr. João Silva</strong></p>
            </div>
            <div class="appointment-actions">
                <button class="reschedule-btn">Reagendar</button>
                <button class="cancel-btn">Desmarcar</button>
            </div>
        </div>

    </div>
    </div><br><br> </div><br><br> </div><br><br><br><br><br><br>
    <div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</body>
</html>
