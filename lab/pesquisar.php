<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Higia Lab</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="../site.webmanifest" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css" />
    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/feather.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Higia | Pesquisar</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .form {
            width: 100%;
            max-width: 900px;
            padding: 30px;
            box-sizing: border-box;
            background-color: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .input-container {
            position: relative;
            flex: 1 1 48%;
            min-width: 200px;
            margin-bottom: 20px;
        }

        .input-container input,
        .input-container select {
            width: 100%;
            padding: 16px;
            font-size: 16px;
            border: 1px solid #CED4DA;
            border-radius: 8px;
            background: transparent;
            color: #333;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-container input:focus,
        .input-container select:focus {
            border-color: #007BFF;
        }

        .input-container label {
            position: absolute;
            top: -10px;
            left: 15px;
            background-color: #FFFFFF;
            padding: 0 5px;
            color: #333;
            font-size: 14px;
            pointer-events: none;
            transition: all 0.2s ease;
        }

        .input-container input:focus+label,
        .input-container input:not(:placeholder-shown)+label,
        .input-container select:focus+label,
        .input-container select:not(:placeholder-shown)+label {
            color: #007BFF;
        }

        .input-container label .required {
            color: red;
            margin-left: 5px;
        }

        .input-container input[type="file"] {
            padding: 16px;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-weight: bold;
            padding: 16px 20px;
            font-size: 16px;
            flex: 1 1 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056B3;
        }

        .top-link {
            margin: 10px auto 20px auto;
        }

        .top-link a {
            color: #007BFF;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
        }

        .top-link a:hover {
            text-decoration: underline;
        }

        .results {
            margin-top: 20px;
            padding: 10px;
            border-radius: 8px;
        }

        .results a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #007BFF;
            font-size: 16px;
            font-weight: bold;
            border: 1px solid #007BFF;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .results a:hover {
            background-color: #007BFF;
            color: #ffffff;
        }

        .results a:active {
            background-color: #0056b3;
        }
    </style> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

<body>
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="../assets/img/logo 1.png" width="100" height="40" alt />
            </a>
        </div>
        <ul class="nav user-menu float-end">
            <li class="nav-item dropdown has-arrow user-profile-list">
                <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                    <div class="user-names">
                        <h5>lorem ipsum</h5>
                        <span>Admin</span>
                    </div>
                    <span class="user-img">
                        <img src="../assets/img/user-06.jpg" alt="Admin" />
                    </span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.html">Meu Perfil</a>
                    <a class="dropdown-item" href="edit-profile.html">Editar Perfil</a>
                    <a class="dropdown-item" href="settings.html">Configurações</a>
                    <a class="dropdown-item" href="login.html">Sair</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="form">
        <div class="top-link">
            <a href="enviar.php">Enviar novo exame</a>
        </div>
        <h2>Pesquisar exame:</h2>
        <form action="pesquisar.php" method="post">
            <div class="input-container">
                <input type="text" name="Pesquisar" placeholder="Digite o nome do paciente" required>
                <label for="Pesquisar">Nome Paciente</label>
            </div>
            <div class="input-container">
                <input type="submit" value="Pesquisar">
            </div>
        </form>
        <div class="results">
            <?php
            include("conexao.php");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Obtém e escapa a string de pesquisa
                $Pesquisar = mysqli_real_escape_string($mysqli, $_POST['Pesquisar']);

                // Executa a consulta
                $sql = "SELECT * FROM documento WHERE nome_cliente LIKE '%$Pesquisar%'";
                $query = mysqli_query($mysqli, $sql);

                if (!$query) {
                    // Exibe mensagem de erro caso a consulta falhe
                    echo "Erro na consulta: " . mysqli_error($mysqli);
                } else {
                    while ($retorno = mysqli_fetch_assoc($query)) {
                        $nome_cliente = $retorno['nome_cliente'];
                        $data = $retorno['data'];
                        $carterinha = $retorno['carterinha'];
                        $exame_tipo = $retorno['tipo_exame'];
                        $id = $retorno['id'];

                        echo "<a href='baixar.php?id=" . $id . "'>" . $nome_cliente . "_" . $carterinha . "_" . $exame_tipo . "_" . $data . "</a>";
                        echo "<br>";
                    }
                }
            }
            ?>



        </div>
    </div>
</body>

</html>