<?php
// Iniciar a sessão
session_start();
include_once("conexao.php");

// Variável de erro
$error = "";

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegar os dados do formulário e sanitizá-los
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Preparar a consulta SQL para verificar o e-mail e a senha
    $sql = "SELECT * FROM doctors WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular parâmetros
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar se o médico foi encontrado
        if ($result->num_rows > 0) {
            $doctor = $result->fetch_assoc();

            // Verificar a senha (assumindo que a senha esteja hashada no banco de dados)
            if (password_verify($password, $doctor['password'])) {
                $error = "E-mail ou senha incorretos!";
            } else {
                $_SESSION['doctor_id'] = $doctor['id'];
                $_SESSION['doctor_first_name'] = $doctor['first_name'];
                $_SESSION['doctor_last_name'] = $doctor['last_name'];
                $_SESSION['doctor_username'] = $doctor['username'];
                $_SESSION['gender'] = $doctor['gender'];
                $_SESSION['doctor_phone'] = $doctor['phone'];
                $_SESSION['doctor_email'] = $doctor['email'];
                $_SESSION['doctor_carteirinha'] = $doctor['carteirinha'];
                $_SESSION['doctor_password'] = $doctor['password'];
                $_SESSION['doctor_birth_date'] = $doctor['birth_date'];
                $_SESSION['doctor_department'] = $doctor['department'];
                $_SESSION['doctor_address'] = $doctor['address'];
                $_SESSION['doctor_city'] = $doctor['city'];
                $_SESSION['doctor_state'] = $doctor['state'];
                $_SESSION['doctor_country'] = $doctor['country'];
                $_SESSION['doctor_zipcode'] = $doctor['zipcode'];
                $_SESSION['doctor_adress'] = $doctor['adress'];
                $_SESSION['doctor_status'] = $doctor['status'];
                $_SESSION['doctor_image'] = $doctor['image'];
                $_SESSION['doctor_cpf'] = $doctor['cpf'];
                $_SESSION['doctor_rg'] = $doctor['rg'];

                // Redirecionar para a página desejada após o login
                header("Location: doctor-dashboard.php");
                exit();
            }
        } else {
            $error = "E-mail ou senha incorretos!";
        }

        $stmt->close();
    } else {
        $error = "Erro ao preparar a consulta!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="../site.webmanifest" />
    <title>Higia</title> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

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
    <div class="container-login">
        <div class="content-box">
            <div class="form-box">
                <h2>Login</h2>
                <?php if (!empty($error)) {
                    echo "<p style='color: red;'>$error</p>";
                } ?>
                <form action="" method="post">

                    <p class="input-box">

                        <select name="carteirinha" id="carteirinha-select" class="styled-select" required>
                            <option value="" disabled selected>Selecione...</option>
                            <option value="../loginADM.php">Administrador</option>
                            <option value="../medic/loginM.php">Médico</option>
                            <option value="../login.php">Paciente</option>
                        </select>
                    </p>


                    <script>
                    // Redirecionar ao selecionar uma opção
                    document.getElementById('carteirinha-select').addEventListener('change', function() {
                        const selectedPage = this.value;
                        if (selectedPage) {
                            window.location.href = selectedPage;
                        }
                    });
                    </script>

                    <p class="input-box">
                        <span class="input-group">E-mail</span>
                        <input type="text" required placeholder="email@gmail.com" name="email">
                    </p>

                    <p class="input-box">
                        <span class="input-group">Senha:</span>
                        <input type="password" placeholder="Digite sua senha" required name="password">
                    </p>

                    <div class="input-box">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
        <div class="color-box">
        </div>
    </div>
</body>

</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

.container-login {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}

.color-box {
    width: 50%;
    height: 100%;
    background-color: #161D53;
    padding: 20px;
}

.content-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
}

.content-box .form-box {
    width: 50%;
}

.content-box .form-box .ul {
    display: flex;
    align-items: center;
    justify-content: center;
}

.content-box .form-box .ul li {
    list-style: none;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin: 0 7px;
    cursor: pointer;
    transition: 0.3s;
}

.content-box .form-box .ul li:hover {
    background: #e4e4e4;
}

.form-box .ul li img {
    width: 40px;
}

.content-box .form-box h2 {
    color: #32324f;
    font-weight: 600;
    font-size: 2em;
    text-transform: uppercase;
    margin-bottom: 15px;
    text-align: center;
}

.content-box .form-box .input-box {
    margin-bottom: 20px;
}

.content-box .form-box .input-box input {
    width: 100%;
    padding: 10px;
    outline: none;
    font-weight: 400;
    border: none;
    font-size: 17px;
    color: #32324f;
    background-color: #ecf2f7;
    border-radius: 5px;
}

.content-box .form-box .input-box span {
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #32324f;
    font-weight: 400;
}

.content-box .form-box .input-box input::placeholder {
    color: #a9adb6;
}

.content-box .form-box .input-box input[type=submit] {
    background: #161D53;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
    font-size: 20px;
    transition: 0.3s;
}

.content-box .form-box .input-box input[type=submit]:hover {
    background: #3286ca;
}

.content-box .form-box .remember {
    margin-bottom: 20px;
    color: #32324f;
    font-weight: 400;
    font-size: 14px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
}

.content-box .form-box .remember a {
    text-decoration: none;
    color: #4aa4ee;
}

.content-box .form-box .remember a:hover {
    color: #3286ca;
}

.content-box .form-box .input-box p {
    color: #161D53;
}

.content-box .form-box .input-box p a {
    color: #4aa4ee;
}

.content-box .form-box .input-box p a:hover {
    color: #3286ca;
}

.content-box .form-box h3 {
    color: #607d8b;
    text-decoration: none;
    margin: 40px 0 15px;
    font-weight: 500;
    text-align: center;
    font-size: 22px;
}

@media (max-width:868px) {
    .container-login .img-box {
        display: none;
    }

    .color-box {
        display: none;
    }

    .container-login .content-box {
        width: 100%;
    }

    .container-login .content-box .form-box {
        width: 100%;
        padding: 40px;
        background: white;
        margin: 50px;
    }

    .container-login .content-box .form-box h3 {
        margin: 30px 0 10px;
    }
}

@media (max-width:450px) {
    .container-login .content-box .form-box .remember {
        flex-wrap: wrap;
    }

    .container-login .content-box .form-box .remember a {
        margin-top: 20px;
    }

}

.styled-select {
    width: 100%;
    padding: 10px;
    font-size: 17px;
    color: #32324f;
    background-color: #ecf2f7;
    border: none;
    border-radius: 5px;
    outline: none;
    appearance: none;
    /* Remove a aparência padrão do navegador */
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"%3E%3Cpath fill="%2360708B" d="M5 8l5 5 5-5z"/%3E%3C/svg%3E');
    background-repeat: no-repeat;
    background-position: right 10px top 50%;
    background-size: 20px 20px;
}

.styled-select:hover {
    background-color: #dfe8f0;
}

.styled-select:focus {
    border: 1px solid #3286ca;
    box-shadow: 0 0 5px rgba(50, 134, 202, 0.5);
}

.content-box .form-box select {
    width: 50%;
    /* Ajuste a largura como preferir */
    padding: 5px;
    /* Alinhe o padding com o restante dos campos */
    font-size: 16px;
    background-color: #ecf2f7;
    /* Cor de fundo para manter o design consistente */
    color: #32324f;
    /* Cor do texto */
    border: none;
    border-radius: 5px;
    outline: none;
}
</style>