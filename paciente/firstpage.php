<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Esculápio</title>
    <link rel="stylesheet" href="home.css">
    <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>
<div class="navbar">
    <?php include 'ecommerc/nav.html'; ?>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 3%;
        background-color: #fff;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1200px;
        margin-top: 8vh;
        margin-bottom: 20px;
    }

    .content {
        max-width: 50%;
        margin-right: 20px;
    }

    #titulo {
        font-size: 2.5em;
        margin: 0;
        color: #161D53;
    }

    .h7 {
        font-size: 1.2em;
        margin: 10px 0;
    }

    button {
        padding: 15px 30px;
        font-size: 1em;
        color: #fff;
        background-color: #0F6FE7;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    button:hover {
        background-color: #0D5BB5;
    }

    .image {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        overflow: hidden;
        max-width: 45%;
        margin-left: 20px;
    }

    .agende {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 9%;
        background-color: #fff;
        margin-top: 5%;
    }

    .content2 {
        max-width: 45%;
        margin-right: 20px;
    }

    .image2 {
        max-width: 45%;
        margin-left: 20px;
        border-radius: 25%;
        overflow: hidden;
    }


    #picture {
        width: 100%;
        height: auto;
        max-height: calc(100vh - 10vh);
        object-fit: contain;
    }

    .contact-bar {
        background-color: #161D53;
        padding: 20px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        box-sizing: border-box;
    }

    .contact-field {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin: 0 5px;
    }

    .contact-field label {
        color: #fff;
        margin-bottom: 5px;
    }

    .contact-input {
        padding: 10px;
        font-size: 1em;
        border: none;
        border-radius: 5px;
        width: 100%;
    }

    .contact-button {
        padding: 10px 20px;
        font-size: 1em;
        color: #fff;
        background-color: #0F6FE7;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 5px;
    }

    .contact-button:hover {
        background-color: #0D5BB5;
    }

    .doctors-section {
        text-align: center;
        padding: 40px 0;
        background-color: #f8f8f8;
    }

    .section-title {
        font-size: 2em;
        color: #333;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 1.2em;
        color: #666;
        margin-bottom: 30px;
    }

    .doctor-cards {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        padding: 20px;
        background-color: #f8f8f8;
    }

    .card {
        width: 30%;
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }

    .image-wrapper {
        position: relative;
        width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        margin-bottom: 10px;
    }

    .image-background {
        position: absolute;
        width: 80%;
        height: 60%;
        background-color: #e0e0e0;
        border-radius: 5px;
        bottom: 0;
    }

    .doctor-image {
        width: 50%;
        height: auto;
        object-fit: contain;
        border-radius: 5px;
        position: relative;
        top: -0.4px;
    }

    .card h3 {
        font-size: 1.2em;
        margin: 20px 0 10px;
    }

    .card p {
        font-size: 1em;
        color: #555;
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
        }

        .content,
        .image {
            max-width: 100%;
            margin: 0;
            text-align: center;
        }

        .content {
            margin-top: 20px;
        }

        .image {
            margin-top: 20px;
        }

        .agende {
            flex-direction: column;
            align-items: center;
        }

        .content2,
        .image2 {
            max-width: 100%;
            margin: 0;
            text-align: center;
        }

        .content2 {
            margin-top: 20px;
        }

        .image2 {
            margin-top: 20px;
        }

        #picture {
            max-height: 40vh;
        }

        .contact-bar {
            flex-direction: column;
            padding: 20px;
        }

        .contact-field {
            width: 100%;
            margin: 10px 0;
        }

        .contact-input {
            margin: 5px 0;
        }

        .contact-button {
            margin-top: 10px;
        }

        .doctor-cards {
            flex-direction: column;
        }

        .card {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

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
                <button onclick="window.location.href='../login.php'">Marque uma consulta</button>
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
            <button onclick="window.location.href='../login.php'">Marque uma consulta</button>
        </div>
    </div>
</body><br><br>
<div class="footer">
    <?php include 'navEfooter/footer.html'; ?>
</div>

</html>