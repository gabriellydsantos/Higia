<?php
session_start();
include("../database.php");

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

$first_name = $_SESSION['first_name'] ?? 'Nome não definido';
$last_name = $_SESSION['last_name'] ?? 'Sobrenome não definido';
$email = $_SESSION['email'] ?? 'Email não definido';
$phone = $_SESSION['phone'] ?? 'Telefone não definido';
$birth_date = $_SESSION['birth_date'] ?? 'Data de nascimento não definida';
$gender = $_SESSION['gender'] ?? 'Gênero não definido';
$address = $_SESSION['address'] ?? 'Endereço não definido';
$city = $_SESSION['city'] ?? 'Cidade não definida';
$state = $_SESSION['state'] ?? 'Estado não definido';
$country = $_SESSION['country'] ?? 'País não definido';
$image = $_SESSION['image'] ?? 'default.png';

// Inicializa uma variável para mensagens
$message = "";

// Processa o upload da imagem se o formulário for submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES["fileImg"]) && $_FILES["fileImg"]["error"] === UPLOAD_ERR_OK) {
        $id = $_SESSION['id']; // Usar ID da sessão para segurança

        $fileTmpPath = $_FILES['fileImg']['tmp_name'];
        $fileName = $_FILES['fileImg']['name'];
        $fileSize = $_FILES['fileImg']['size'];
        $fileType = $_FILES['fileImg']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Extensões permitidas
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Define o diretório de destino
            $uploadFileDir = '../img/';
            // Gera um nome único para evitar sobrescrita
            $newFileName = uniqid() . '.' . $fileExtension;
            $dest_path = $uploadFileDir . $newFileName;

            // Move o arquivo para o diretório desejado
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Atualiza o caminho da imagem na sessão e no banco de dados
                $_SESSION['image'] = $newFileName;

                // Atualiza o banco de dados
                $query = "UPDATE tb_user SET image = ? WHERE id = ?";
                if ($stmt = $conn->prepare($query)) {
                    $stmt->bind_param("si", $newFileName, $id);
                    if ($stmt->execute()) {
                        $message = "Imagem atualizada com sucesso.";
                        // Opcional: redirecionar para evitar reenvio do formulário
                        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
                        exit();
                    } else {
                        $message = "Erro ao atualizar a imagem no banco de dados.";
                    }
                    $stmt->close();
                } else {
                    $message = "Erro na preparação da consulta SQL.";
                }
            } else {
                $message = "Erro ao mover o arquivo para o diretório de upload.";
            }
        } else {
            $message = "Tipo de arquivo não permitido. Apenas JPG, GIF, PNG, JPEG são aceitos.";
        }
    } else {
        $message = "Erro ao enviar o arquivo. Código do erro: " . $_FILES['fileImg']['error'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
    <title>Higia</title>
    <style>
    .upload {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4% 0;
        width: 100%;
    }

    .upload img {
        border-radius: 50%;
        border: 8px solid #DCDCDC;
        width: 125px;
        height: 125px;
        margin-right: -90px;
    }

    .upload .rightRound {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #161D53;
        width: 32px;
        height: 32px;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer;
    }

    .upload .fa {
        color: white;
    }

    .upload input {
        position: absolute;
        transform: scale(2);
        opacity: 0;
        cursor: pointer;
    }

    .upload input::-webkit-file-upload-button,
    .upload input[type=submit] {
        cursor: pointer;
    }

    .upload .rightRound {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user-name {
        font-size: 1.5rem;
        color: #161D53;
        text-align: left;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .photo img {
        width: 100%;
        height: auto;
        display: block;
    }

    .perfil-info {
        display: flex;
        align-items: center;
        padding: 20px;
        background-color: #f0f0f0;
        position: relative;
    }

    .perfil-photo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        border: 5px solid #fff;
        position: absolute;
        top: -50px;
        left: 20px;
    }

    .perfil-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .user-name {
        margin-left: 140px;
        font-size: 24px;
    }

    .info-card {
        width: 80%;
        margin: 0 auto;
        background-color: #e0f7fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .info-card h2 {
        margin: 0;
        margin-bottom: 20px;
    }

    .info-columns {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .column-left,
    .column-right {
        width: 45%;
    }

    .column-left p,
    .column-right p {
        margin: 5px 0;
    }

    .itens {
        width: 80%;
        margin: 20px auto;
    }

    .itens h2 {
        margin-bottom: 20px;
        text-align: left;
    }

    .item-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: space-between;
    }

    .item-box {
        flex: 1 1 calc(20% - 10px);
        background-color: #b2ebf2;
        color: #000;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
        cursor: pointer;
    }

    .item-box:hover {
        background-color: #81d4fa;
    }

    @media (max-width: 768px) {
        .upload {
            flex-direction: column;
        }

        .upload img {
            margin-right: 0;
            margin-bottom: 10px;
        }

        .user-name {
            text-align: center;
        }

        .perfil-card {
            width: 95%;
        }

        .perfil-info {
            flex-direction: column;
            align-items: flex-start;
            padding-top: 60px;
        }

        .perfil-photo {
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
        }

        .user-name {
            margin-left: 0;
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }

        .info-card {
            width: 95%;
        }

        .info-columns {
            flex-direction: column;
        }

        .column-left,
        .column-right {
            width: 100%;
        }

        .itens {
            width: 95%;
        }

        .item-box {
            flex: 1 1 calc(50% - 10px);
        }
    }

    @media (max-width: 480px) {
        .item-box {
            flex: 1 1 calc(100% - 10px);
        }
    }

    .message {
        text-align: center;
        margin: 20px;
        font-size: 1.2rem;
        color: green;
    }

    .error {
        text-align: center;
        margin: 20px;
        font-size: 1.2rem;
        color: red;
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

    <div id="containerPerfil">
        <div class="perfil-card">
            <div class="upload">
                <img src="../img/<?php echo htmlspecialchars($image); ?>" alt="Imagem de Perfil" id="image">
                <div class="user-name"><?php echo htmlspecialchars($first_name . " " . $last_name); ?></div>
            </div>
        </div>

        <div class="info-card">
            <h2>Minhas Informações</h2>
            <div class="info-columns">
                <div class="column-left">
                    <p>Nome completo: <?php echo htmlspecialchars($first_name . " " . $last_name); ?></p>
                    <p>Email: <?php echo htmlspecialchars($email); ?></p>
                    <p>Telefone: <?php echo htmlspecialchars($phone); ?></p>
                    <p>Data de nascimento: <?php echo htmlspecialchars($birth_date); ?></p>
                </div>
                <div class="column-right">
                    <p>Gênero: <?php echo htmlspecialchars($gender); ?></p>
                    <p>Endereço: <?php echo htmlspecialchars($address); ?></p>
                    <p>Cidade: <?php echo htmlspecialchars($city); ?></p>
                    <p>Estado: <?php echo htmlspecialchars($state); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="itens">
        <h2>Acesse seus itens</h2>
        <div class="item-grid">
            <div class="item-box" onclick="location.href='carteirinha.php';">Carteirinha Digital</div>
            <div class="item-box" onclick="location.href='prontuario.php';">Meu Prontuário</div>
            <div class="item-box" onclick="location.href='agendadas.php';">Minhas Consultas</div>
            <div class="item-box" onclick="location.href='exames.php';">Meus exames</div>
            <div class="item-box" onclick="location.href='centralajuda.php';">Central de Ajudas</div>
        </div>
    </div>

    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>