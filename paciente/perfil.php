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
?>
 <style media="screen">
    .upload{
      padding-top: 5%;
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 8px solid #DCDCDC;
      width: 125px;
      height: 125px;
    }
    .upload .rightRound{
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
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload .fa-times {
    font-size: 16px;
    color: white;
}

    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
    .upload .rightRound{
    display: flex;
    justify-content: center;
    align-items: center;
}
.upload .leftRound {
  display: flex;
  padding-top: 5%;
    justify-content: center;
    align-items: center;
}
    .user-name {
      text-align: center;
      padding: 20px;
      font-size: 1.5rem;
      color:#161D53;
      margin-bottom: 20px;
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

.column-left, .column-right {
    width: 45%;
}

.column-left p, .column-right p {
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
}


@media (max-width: 768px) {
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
        margin-top: 60px;
        text-align: center;
        width: 100%;
    }

    .info-card {
        width: 95%;
    }

    .info-columns {
        flex-direction: column;
    }

    .column-left, .column-right {
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
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
    <form class="form" id = "form" action="upload_image.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <div class="upload">
                        <img src="img/<?php echo $user['image']; ?>" id = "image">
                        <div class="rightRound" id = "upload">
                            <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
                            <i class = "fa fa-camera"></i>
                        </div>
                        <div class="leftRound" id = "cancel" style = "display: none;">
                            <i class = "fa fa-times"></i>
                        </div> 
                    </div>
                </form>
                
        <div class="user-name"><?php echo htmlspecialchars($first_name . " " . $last_name); ?></div>
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
            <div class="item-box" onclick="location.href='centralajuda.php';">Central de Ajudas</div>
        </div>
    </div>
    </div><br><br>
    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); 

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; 

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>

<?php
if (isset($_FILES["fileImg"]["name"])) {
    $id = $_POST["id"];
    
    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName = uniqid() . '_' . $_FILES["fileImg"]["name"];
    
    $target = "img/" . $imageName;
    
    if (move_uploaded_file($src, $target)) {
        $query = "UPDATE tb_user SET image = '$imageName' WHERE id = $id";
        mysqli_query($conn, $query);
        
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao fazer upload da imagem.";
    }
}
?>
</body>
<div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</html>

