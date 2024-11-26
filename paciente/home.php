<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higia</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
    <!-- acessibilidade -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />


</head>
<div class="navbar">
    <?php include 'ecommerc/navbar.html'; ?>
</div>
<style>
.contact-bar {
    text-align: center;
    padding: 20px 10px;
    /* Ajuste para responsividade */
    background-color: #161D53;
    display: flex;
    /* Flexbox para centralização */
    flex-direction: column;
    /* Alinha itens verticalmente */
    align-items: center;
    /* Centraliza horizontalmente */
    justify-content: center;
    /* Centraliza verticalmente */
}

.title {
    font-size: 2.3rem;
    margin: 10px 0;
    color: white;
}

.section-subtitle {
    font-size: 1.5rem;
    color: #ffdf5a;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .title {
        font-size: 2rem;
        /* Reduz tamanho em telas menores */
    }

    .section-subtitle {
        font-size: 1.2rem;
        /* Ajusta subtítulo para telas pequenas */
    }

    .contact-bar {
        padding: 15px 5px;
        /* Menor espaçamento em dispositivos móveis */
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
                <button onclick="window.location.href='agendamento.php'">Marque uma consulta</button>
            </div>
            <div class="image">
                <img src="img/primimg.png" id="picture" alt="Imagem da clínica">
            </div>
        </div>
    </div>
    <div class="contact-bar">
        <div class="contact-field">
            <h2 class="title">Utilize nossos serviços</h2>
            <p class="section-subtitle">Médicos Bem Qualificados Estão Prontos para Atendê-la</p>
        </div>
    </div>
    <div class="doctors-section">

    </div>
    <div class="agende">
        <div class="image2">
            <img src="img/ultima.jpg" id="picture" alt="ultimaimg">
        </div>
        <div class="content2">
            <h1 id="titulo">Agende sua consulta</h1>
            <h1 id="titulo">Online hoje mesmo!</h1>
            <h7 class="h7">Nossa plataforma de consultas online oferece a conveniência e a segurança de realizar
                consultas médicas sem sair de casa.
                Aproveite a facilidade de agendar sua consulta a qualquer momento e em qualquer lugar.</h7>
            <br><br>
            <button onclick="window.location.href='agendamento.php'">Marque uma consulta</button>
        </div>
    </div>
</body><br><br>
<div class="footer">
    <?php include 'navEfooter/footer.html'; ?>
</div>

</html>