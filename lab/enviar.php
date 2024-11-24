
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="../site.webmanifest" />
    <title>Higia</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css" />
    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/feather.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            /* Adicionado para garantir espaço em telas pequenas */
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
            padding: 12px 60px;
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

        /* Notificação */
        .notification {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #28a745;
            /* Verde para "Arquivo enviado " */
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            text-align: center;
            font-size: 16px;
        }

        .notification.show {
            opacity: 1;
        }

        .notification.hidden {
            display: none;
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
            <!-- Lista de notificações, perfil do usuário, etc. -->
        </ul>
    </div>

    <div class="form">
        <div class="top-link">
            <a href="pesquisar.php">Consultar os exames</a>
        </div>

        <h2>Enviar arquivo</h2>

        <form method="POST" enctype="multipart/form-data">
            <div class="input-container">
                <input type="text" id="nome_cliente" name="nome_cliente" required placeholder=" ">
                <label for="nome_cliente">Primeiro nome <span class="required">*</span></label>
            </div>

            <div class="input-container">
                <input type="text" id="carteirinha" name="carteirinha" placeholder=" " required>
                <label for="carteirinha">Carterinha do paciente <span class="required">*</span></label>
            </div>

            <div class="input-container">
                <select id="exame_tipo" name="exame_tipo" required>
                    <option value="" disabled selected>Selecione o tipo de exame</option>
                    <option value="raiox">Raio-X</option>
                    <option value="ultrasson">Ultrasson</option>
                    <option value="eletro">Eletrocardiograma</option>
                    <option value="hemograma">Hemograma</option>
                </select>
                <label for="exame_tipo">Tipo de exame <span class="required">*</span></label>
            </div>


            <div class="input-container" style="flex: 1 1 100%;">
                <input type="file" id="pdf_arquivo" name="pdf_arquivo" accept=".pdf" required>
                <label for="pdf_arquivo">Anexar exame <span class="required">*</span></label>
            </div>

            <div style="flex: 1 1 100%;">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <!-- Notificação -->
    <div id="notification" class="notification hidden">
        <p>Arquivo enviado !</p>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("conexao.php");

        // Validação e coleta dos dados do formulário
        $data = date('Y-m-d'); // Formato correto para DATE no MySQL
        $nome_cliente = $_POST['nome_cliente'];
        $carteirinha = $_POST['carteirinha'];
        $exame_tipo = $_POST['exame_tipo'];

    // Pesquisa o id do paciente com base na carteirinha
    $query = "SELECT id FROM patients WHERE carteirinha = ? LIMIT 1";
    $stmt = $mysqli->prepare($query);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param("s", $carteirinha); // "s" indica que o parâmetro é uma string
        $stmt->execute();
        
        $resultado = $stmt->get_result();
        $paciente = $resultado->fetch_assoc();
        
        // Verifica se o resultado foi encontrado e armazena o ID do paciente
        if ($paciente && isset($paciente['id'])) {
            $id_paciente = $paciente['id'];
            //echo "ID do paciente: " . $id_paciente;
        } else {
            echo "paciente não encontrado para a carteirinha fornecida.";
            $id_paciente = null; // Certifica-se de que $id_doutor seja null caso não haja resultado
        }

        // Fecha o statement
        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta: " . $mysqli->error;
    }

        // Verifica se todos os campos necessários foram preenchidos
        if (!$nome_cliente || !$carteirinha || !$exame_tipo) {
            echo "<script>
            document.getElementById('notification').innerText = 'Todos os campos são obrigatórios!'; 
            document.getElementById('notification').classList.remove('hidden');
            document.getElementById('notification').classList.add('show');
            setTimeout(() => {
                document.getElementById('notification').classList.remove('show');
                document.getElementById('notification').classList.add('hidden');
            }, 2000);
        </script>";
            exit;
        }

        if (isset($_FILES['pdf_arquivo']) && $_FILES['pdf_arquivo']['error'] == 0) {
            $conteudo_pdf = file_get_contents($_FILES['pdf_arquivo']['tmp_name']);
            $stmt = $mysqli->prepare("INSERT INTO documento(id_paciente, nome_cliente, carteirinha, data, tipo_exame, pdf_arquivo) VALUES (?, ?, ?, ?, ?, ?)");
            // Verificar se a preparação foi bem-sucedida
            if ($stmt === false) {
                die('Erro na preparação da declaração: ' . $mysqli->error);
            }

            // Vincular os parâmetros
            $stmt->bind_param('isssss', $id_paciente, $nome_cliente, $carteirinha, $data, $exame_tipo, $conteudo_pdf);

            if ($stmt->execute()) {
                echo "<script>
                document.getElementById('notification').innerText = 'Arquivo enviado!';
                document.getElementById('notification').classList.remove('hidden');
                document.getElementById('notification').classList.add('show');
                setTimeout(() => {
                    document.getElementById('notification').classList.remove('show');
                    document.getElementById('notification').classList.add('hidden');
                }, 2000);
            </script>";
            } else {
                echo "<script>
                document.getElementById('notification').innerText = 'Deu errado!';
                document.getElementById('notification').classList.remove('hidden');
                document.getElementById('notification').classList.add('show');
                setTimeout(() => {
                    document.getElementById('notification').classList.remove('show');
                    document.getElementById('notification').classList.add('hidden');
                }, 2000);
            </script>";
            }

            $stmt->close();
            $mysqli->close();
        } else {
            echo "<script>
            document.getElementById('notification').innerText = 'Erro ao enviar o arquivo. Por favor, tente novamente.';
            document.getElementById('notification').classList.remove('hidden');
            document.getElementById('notification').classList.add('show');
            setTimeout(() => {
                document.getElementById('notification').classList.remove('show');
                document.getElementById('notification').classList.add('hidden');
            }, 2000);
        </script>";
        }
    }
    ?>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>