<?php
session_start();
include("database.php"); // Inclui o arquivo de conexão com o banco de dados

// Variável de erro
$error = "";

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegar os dados do formulário e sanitizá-los
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar a consulta SQL para verificar o e-mail
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular parâmetros
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar se o admin foi encontrado
        if ($result->num_rows > 0) {
            $admin = $result->fetch_assoc();

            // Verificar a senha 
            if ($password === $admin['password']) {
                // Iniciar a sessão com as variáveis do admin
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_first_name'] = $admin['first_name'];
                $_SESSION['admin_last_name'] = $admin['last_name'];
                $_SESSION['admin_username'] = $admin['username'];
                $_SESSION['gender'] = $admin['gender'];
                $_SESSION['admin_phone'] = $admin['phone'];
                $_SESSION['admin_email'] = $admin['email'];
                $_SESSION['admin_carteirinha'] = $admin['carteirinha'];
                $_SESSION['admin_birth_date'] = $admin['birth_date'];
                $_SESSION['admin_address'] = $admin['address'];
                $_SESSION['admin_city'] = $admin['city'];
                $_SESSION['admin_state'] = $admin['state'];
                $_SESSION['admin_country'] = $admin['country'];
                $_SESSION['admin_zipcode'] = $admin['zipcode'];
                $_SESSION['admin_status'] = $admin['status'];
                $_SESSION['admin_image'] = $admin['image'];
                $_SESSION['admin_cpf'] = $admin['cpf'];
                $_SESSION['admin_rg'] = $admin['rg'];

                // Redirecionar para a página desejada após o login
                header("Location: ../Higia/admin/index.php");
                exit();
            } else {
                $error = "E-mail ou senha incorretos!";
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
    <title>Higia</title>
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
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
    <div class="container-login">
        <div class="content-box">
            <div class="form-box">
                <h2>Login</h2>
                <?php if (!empty($error)) {
                    echo "<p style='color: red;'>$error</p>";
                } ?>
                <form action="" method="post">

                    <script>
                    // Recuperar a URL atual para indicar a página selecionada
                    const currentURL = window.location.pathname;
                    const selectElement = document.getElementById('carteirinha-select');

                    // Iterar pelas opções para verificar se alguma corresponde à URL atual
                    Array.from(selectElement.options).forEach(option => {
                        if (option.value && currentURL.endsWith(option.value)) {
                            option.selected = true; // Define a opção correspondente como selecionada
                        }
                    });

                    // Atualizar o `select` ao trocar de página (redireciona)
                    selectElement.addEventListener('change', function() {
                        const selectedPage = selectElement.value;
                        if (selectedPage) {
                            window.location.href = selectedPage; // Redireciona para a página
                        }
                    });
                    </script>


                    <p class="input-box">
                        <span class="input-group">E-mail</span>
                        <input type="email" required placeholder="email@gmail.com" name="email">
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
        <div class="color-box"></div>
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