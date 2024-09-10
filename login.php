<?php
include("database.php"); // Inclui o arquivo de conexão

if (isset($_POST['carteirinha']) && isset($_POST['password'])) {
    if (strlen($_POST['carteirinha']) == 0) {
        echo "Preencha corretamente o campo de login com o número da sua carteirinha.";
    } else if (strlen($_POST['password']) == 0) {
        echo "Preencha corretamente o campo de senha.";
    } else {
        // Validação do login
        $carteirinha = $conn->real_escape_string($_POST['carteirinha']);
        $password = $conn->real_escape_string($_POST['password']);

        // Verificar se é um paciente
        $sql_patient = "SELECT * FROM patients WHERE carteirinha = '$carteirinha' AND password = '$password'";
        $query_patient = $conn->query($sql_patient);

        // Verificar se é um médico
        $sql_doctor = "SELECT * FROM doctors WHERE carteirinha = '$carteirinha' AND password = '$password'";
        $query_doctor = $conn->query($sql_doctor);

        if ($query_patient->num_rows == 1) {
            // Login como paciente
            $usuario = $query_patient->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['first_name'] = $usuario['first_name'];
            $_SESSION['carteirinha'] = $usuario['carteirinha'];

            header('Location: admin/add-patient.php');  // Redireciona para a área do paciente
            exit();
        } elseif ($query_doctor->num_rows == 1) {
            // Login como médico
            $usuario = $query_doctor->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['first_name'] = $usuario['first_name'];
            $_SESSION['carteirinha'] = $usuario['carteirinha'];
            $_SESSION['department'] = $usuario['department']; // Exemplo de como incluir informações específicas do médico

            header('Location: admin/add-doctor.php');  // Redireciona para a área do médico
            exit();
        } else {
            // Falha no login
            echo "Falha ao logar: Carteirinha ou senha incorretos.";
        }
    }
}
?>

<div class="container-login">
    <div class="content-box">
        <div class="form-box">
            <h2>Login</h2>
            <form action="" method="post">
                <p class="input-box">
                    <span class="input-group">N° Carteirinha:</span>
                    <input type="text" required placeholder="000000" name="carteirinha">
                </p>

                <p class="input-box">
                    <span class="input-group">Senha:</span>
                    <input type="password" placeholder="Digite sua senha" required name="password">
                </p>

                <div class="remember">
                    <label>
                        <input type="checkbox"> Lembrar-me
                    </label>
                    <a href="#"> Esqueceu a senha </a>
                </div>

                <div class="input-box">
                    <input type="submit" value="Entrar">
                </div>

                <div class="input-box">
                    <p>Não Tem Uma Conta? <a href="criarConta.php">Inscrever-se</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="color-box">
    </div>
</div>
</body>


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
</style>