<?php 
session_start(); 
include("../database.php"); 

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); 
    exit();
}

$id = $_SESSION['id']; // Define a variável $id

$first_name = $_SESSION['first_name'] ?? 'Nome não definido';
$last_name = $_SESSION['last_name'] ?? 'Sobrenome não definido';
$email = $_SESSION['email'] ?? 'Email não definido';
$carteirinha = $_SESSION['carteirinha'] ?? 'Carteirinha não definida';
$birth_date = $_SESSION['birth_date'] ?? 'Data não definida';
$image = $_SESSION['image'] ?? 'default.png'; 

$query = "SELECT image FROM tb_user WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Erro na consulta: ' . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha Digital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 80px auto 100px; 
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
            color: #000;
            margin-left: 10px;
        }

        .header .pdf-icon {
            margin-right: 20px;
            cursor: pointer;
        }

        .pdf-icon img {
            width: 30px;
            height: 30px;
        }

        .card-section {
            display: flex;
            flex-wrap: wrap; 
            gap: 20px; 
        }

        .card-front,
        .card-back {
        flex: 1 1 calc(50% - 20px);
        background-color: #161D53;
        border-radius: 10px;
        padding: 20px;
        color: white;
        position: relative; 
        box-sizing: border-box;
        height: 200px; 
        }

        .card-front .yellow-line {
            height: 18px; 
            background-color: #FAD939;
            width: 100%;
            position: absolute;
            bottom: 35px;
            left: 0;
        }

        .card-front .blue-line {
            height: 36px; 
            background-color: #0F6FE7;
            width: 100%;
            position: absolute;
            bottom: 0; 
            left: 0;
            border-bottom-right-radius: 10px ;
            border-bottom-left-radius: 10px ;
        }

        .card-back .yellow-line {
            height: 18px;
            width: 100%;
            position: absolute;
            left: 0;
            border-top-right-radius: 10px ;
            border-top-left-radius: 10px ;
            background-color: #FAD939;
            top: 0;
        }

        .card-back .blue-line {
            height: 27px;
            width: 100%;
            position: absolute;
            left: 0;
            background-color: #0F6FE7;
            top: 18px;
        }

        .card-front .logo,
        .card-back .logo {
            position: absolute;
            top: 20px;
            left: 10px;
            width: 20%;
        }

        .card-front .logo img,
        .card-back .logo img {
            width: 100%;
            height: auto;
        }

        .card-front .profile-photo {
            position: absolute;
            top: 20px;
            right: 10px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
        }

        .card-front .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-back .info {
            margin-top: 60px;
            font-size: 14px;
        }

        .card-back .info p {
            margin: 5px 0;
        }

        .footer {
            background-color: #161D53;
            color: white;
            padding: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .card-front,
            .card-back {
                flex: 1 1 100%; 
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
<div class="container">
    <div class="header">
        <h1>Carteirinha</h1>
    </div>
<br>
    <div class="card-section">
        <div class="card-front">
            <div class="yellow-line"></div>
            <div class="blue-line"></div>
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
            </div>
            <?php
            $query = "SELECT image FROM tb_user WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);
            ?>
            <div class="profile-photo">
                <img src="img/<?php echo $user['image']; ?>" alt="" style="width: 150px; height: 150px; border-radius: 50%;">
            </div>
        </div>

        <div class="card-back">
            <div class="yellow-line"></div>
            <div class="blue-line"></div>
            <div class="info">
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></p>
                <p><strong>Número da carteirinha:</strong> <?php echo htmlspecialchars($carteirinha); ?></p>
                <p><strong>Data de nascimento:</strong> <?php echo htmlspecialchars($birth_date); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <?php include 'navEfooter/footer.html'; ?>
</div>
</body>
</html>
