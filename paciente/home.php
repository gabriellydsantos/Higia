<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Esculápio</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<div class="navbar">
        <?php include 'ecommerc/navbar.html';?>
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
    <div class="container">
        
        <div class="header">
            <div class="content">
                <h1 id="titulo">Nós nos importamos com a sua saúde</h1>
                <h7 class="h7">Uma boa saúde abrange o equilíbrio entre o bem-estar mental, físico e social</h7>
                <br><br>
                <button onclick="window.location.href='agendamento.php'" >Marque uma consulta</button>
            </div>
            <div class="image">
                <img src="img/primimg.png" id="picture" alt="Imagem da clínica">
            </div>
        </div>
    </div>
    <div class="contact-bar">
        <div class="contact-field">
            <label for="name">Nome Completo</label>
            <input type="text" id="name" placeholder="Digite seu nome" class="contact-input">
        </div>
        <div class="contact-field">
            <label for="email">Endereço de email</label>
            <input type="email" id="email" placeholder="Digite seu email" class="contact-input">
        </div>
        <div class="contact-field">
            <label for="message">Ajuda</label>
            <input type="text" id="message" placeholder="Digite sua mensagem" class="contact-input">
        </div>
        <button class="contact-button">Enviar</button>
    </div>
    <div class="doctors-section">
        <h2 class="section-title">Conheça Nossos Médicos</h2>
        <p class="section-subtitle">Médicos Bem Qualificados Estão Prontos para Atendê-la</p>
        <div class="doctor-cards">
            <div class="card">
                <div class="image-wrapper">
                    <div class="image-background"></div>
                    <img src="img/doutora1.png" alt="Dra. Sicrana" class="doctor-image">
                </div>
                <h3>Dr. Fulana</h3>
                <p>Especialidade</p>
            </div>
            <div class="card">
                <div class="image-wrapper">
                    <div class="image-background"></div>
                    <img src="img/doutor1.png" alt="Dr. Fulano" class="doctor-image">
                </div>
                <h3>Dra. Sicrano</h3>
                <p>Especialidade</p>
            </div>
            <div class="card">
                <div class="image-wrapper">
                    <div class="image-background"></div>
                    <img src="img/doutor2.png" alt="Dr. Beltrano" class="doctor-image">
                </div>
                <h3>Dr. Beltrano</h3>
                <p>Especialidade</p>
            </div>
        </div>
    </div>
    <div class="agende">
        <div class="image2">
            <img src="img/ultima.jpg" id="picture" alt="ultimaimg">
        </div>
        <div class="content2">
            <h1 id="titulo">Agende sua consulta</h1>
            <h1 id="titulo">Online hoje mesmo!</h1>
            <h7 class="h7">Nossa plataforma de consultas online oferece a conveniência e a segurança de realizar consultas médicas sem sair de casa. 
           Aproveite a facilidade de agendar sua consulta a qualquer momento e em qualquer lugar.</h7>
            <br><br>
            <button  onclick="window.location.href='agendamento.php'">Marque uma consulta</button>
        </div>
    </div>
</body><br><br>
<div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</html>
