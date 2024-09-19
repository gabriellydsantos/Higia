<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de Ajuda</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .header {
            background-color: #e6f7ff;
            text-align: center;
            padding: 100px 20px; 
            position: relative;
        }
        .header h1 {
            margin: 0;
            color: #003366;
        }
        .header p {
            color:#333;
            font-size: 14px;
        }
        .search-bar {
            margin-top: 20px;
        }
        .search-bar input[type="text"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 10px;
            position: relative;
            top: -100px;
            flex-wrap: wrap; 
        }
        .card {
        background-color: #003366;
        color: white;
        padding: 10px;
        text-align: center;
        width: 15%; 
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        flex: 1 1 calc(25% - 40px); 
        box-sizing: border-box;
        margin: 0 35px;
        }
        .card i {
            font-size: 50px;
            margin-bottom: 10px;
        }
        .faq {
            margin: 60px 0;
            width: 62%;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            top: -80px;
        }
        .faq h2 {
            color: #003366;
            cursor: pointer;
        }
        .faq h3 {
            color: #333;
            cursor: pointer;
        }
        .faq p {
            display: none;
            color: #666;
            padding: 0 20px;
        }
        .contact {
            text-align: center;
            margin: 20px 0;
            margin-top: -93px;
        }
        .contact h2 {
            color: #003366;
            margin-bottom: 10px;
        }
        .contact p {
            color: #666;
            margin-bottom: 20px;
        }
        .contact a {
            text-decoration: none;
            background-color: #003366;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }
        footer {
            background-color: #003366;
            color: white;
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .header {
                padding: 50px 20px;
            }
            .header h1 {
                font-size: 24px;
            }
            .search-bar input[type="text"] {
                width: 80%;
                font-size: 14px;
            }
            .cards {
                top: -50px;
            }
            .card {
                flex: 1 1 calc(50% - 40px);
                margin-bottom: 20px;
            }
            .faq {
                width: 80%;
                top: -60px;
            }
        }
        @media (max-width: 480px) {
            .header {
                padding: 30px 20px;
            }
            .header h1 {
                font-size: 18px;
            }
            .search-bar input[type="text"] {
                width: 100%;
                font-size: 12px;
            }
            .card {
                flex: 1 1 100%;
                margin-bottom: 20px;
            }
            .faq {
                width: 100%;
                top: -40px;
            }
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
    <div class="header">
        <h1>Como Podemos Ajudar?</h1>
        <p>Descreva brevemente o que você está procurando e vamos ajudá-lo a encontrar as melhores respostas.</p>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Pesquisar...">
        </div>
    </div>

    <div class="container">
        <div class="cards">
            <div class="card" onclick="location.href='#';">
                <i class="fas fa-book-open"></i>
                <h2>Guia de Uso</h2>
                <p>Informações importantes sobre como utilizar o sistema e aproveitar ao máximo suas funcionalidades.</p>
            </div>
            <div class="card" onclick="location.href='#';">
            <i class="fas fa-shield-alt"></i>
                <h2>Privacidade</h2>
                <p>Seus dados são tratados com segurança. Para detalhes, acesse a Política de Privacidade.</p>
            </div>
        </div>

        <div class="faq">
            <h2 onclick="toggleFaq(this)">Artigos em Destaque </h2> <br><br>
            <h3 onclick="toggleAnswer(this)">Como faço para fazer login no aplicativo? <i class="fas fa-chevron-right"></i></h3>
            <p>Basta acessar a tela de login, inserir o número da sua carteirinha e o seu CPF nos campos indicados, e clicar no botão "Entrar". Se os dados estiverem corretos, você será direcionado para a sua conta; caso contrário, uma mensagem de erro será exibida. Se precisar, marque a opção "Lembrar-me" para facilitar futuros acessos ou clique em "Esqueceu a senha" se não lembrar da sua senha.</p><br>

            <h3 onclick="toggleAnswer(this)">Onde posso encontrar minhas informações de perfil? <i class="fas fa-chevron-right"></i></h3>
            <p>Para encontrar suas informações de perfil, você pode acessar a opção "Menu" no site da clínica. No menu, há um ícone representando um corpo humano, geralmente localizado na parte superior ou lateral da tela. Ao clicar neste ícone, você será direcionado diretamente para a página do seu perfil, onde poderá visualizar e editar suas informações pessoais.</p><br>

            <h3 onclick="toggleAnswer(this)">Como agendar uma consulta através do aplicativo? <i class="fas fa-chevron-right"></i></h3>
            <p>Na pagina inicial, clique em "Marque uma consulta" e você sera direcionado para a pagina de agendamento. Na pagina de agendamento, selecione a especialidade desejada no menu de filtros e escolha o profissional disponível. Em seguida, clique no campo de data para escolher o dia e selecione o horário disponível. Finalize clicando em "Confirmar Consulta".</p><br>

            <h3 onclick="toggleAnswer(this)">Posso cancelar ou reagendar uma consulta pelo aplicativo? Se sim, como? <i class="fas fa-chevron-right"></i></h3>
            <p>Sim, vá até a seção "Agenda" no menu. Isso o levará para a página com suas consultas agendadas. Lá, você encontrará a opção para "Desmarcar" ou "Reagendar" cada consulta. Basta clicar na opção desejada e seguir as instruções para concluir o processo.</p><br>

            <h3 onclick="toggleAnswer(this)">Onde encontro meus registros médicos ou histórico de consultas? <i class="fas fa-chevron-right"></i></h3>
            <p>Para encontrar seus registros médicos ou histórico de consultas, vá até a sua página de perfil. Na parte inferior dessa página, clique em "Meu Prontuário". Lá você encontrará todo o histórico de suas consultas e registros médicos.</p><br>
        </div>

        <div class="contact">
            <h2>Não encontrou resposta para sua pergunta?</h2>
            <p>Entre em contato conosco para esclarecer dúvidas adicionais.</p>
            <a href="#">CONTATO</a>
        </div>
    </div><br><br>

  
    <div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('i');
            if (answer.style.display === "block") {
                answer.style.display = "none";
                icon.classList.replace('fa-chevron-down', 'fa-chevron-right');
            } else {
                answer.style.display = "block";
                icon.classList.replace('fa-chevron-right', 'fa-chevron-down');
            }
        }

        function toggleFaq(element) {
            const faqs = document.querySelectorAll('.faq h3, .faq p');
            const icon = element.querySelector('i');
            faqs.forEach(faq => {
                if (faq.tagName.toLowerCase() === 'h3') {
                    faq.nextElementSibling.style.display = "none";
                    faq.querySelector('i').classList.replace('fa-chevron-down', 'fa-chevron-right');
                } else {
                    faq.style.display = "none";
                }
            });
            icon.classList.toggle('fa-chevron-up');
            icon.classList.toggle('fa-chevron-down');
        }
    </script>
</body>
</html>
