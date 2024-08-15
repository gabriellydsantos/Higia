<?php


if(isset($_POST['submit'])){

    include_once('conexao.php');

        $carterinha = $_POST['carterinha'];
        $nomeCompleto = $_POST['nomeCompleto'];
        $nomeSocial = $_POST['nomeSocial'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $nascimento = $_POST['nascimento'];
        $idade = $_POST['idade'];
        $deficiencia = $_POST['deficiencia'];
        $doenca = $_POST['doenca'];
        $cep = $_POST['cep'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $genero = $_POST['genero'];
        $plano = $_POST['plano'];

        $result = mysqli_query($mysqli, "INSERT INTO clientes(carterinha, nomeCompleto, nomeSocial, email, telefone, nascimento, idade, deficiencia, doenca, cep, cpf, rg, genero, plano)
         VALUES ('$carterinha', '$nomeCompleto', '$nomeSocial', '$email', '$telefone', '$nascimento', '$idade', '$deficiencia', '$doenca', '$cep', '$cpf', '$rg', '$genero', '$plano'
            )");
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esculapio | Cadastro</title>
</head>
<body>
   <h1>Cadastrar usuarios</h1> 
   <form action="cadastro.php" method="post">

    <label for="carterinha">Número da carterinha:</label>
    <input type="text" name="carterinha" id="carterinha" required>

    <label for="nomeCompleto">Nome completo:</label>
    <input type="text" name="nomeCompleto" id="nomeCompleto" required>

    <label for="nomeSocial">Nome social:</label>
    <input type="text" name="nomeSocial" id="nomeSocial" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="telefone">Telefone:</label>
    <input type="number" name="telefone" id="telefone" required>

    <label for="nascimento">Data de nascimento:</label>
    <input type="date" name="nascimento" id="nascimento" required>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" required>

    <label for="deficiencia">É portador de alguma deficiência?</label>
    <input type="text" name="deficiencia" id="deficiencia" required>

    <label for="doenca">É portador de alguma doença?</label>
    <input type="text" name="doenca" id="doenca" required>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" id="cep" required>

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" required>

    <label for="rg">RG:</label>
    <input type="text" name="rg" id="rg" required>

    <label for="genero">Genêro:</label>
    <input type="text" name="genero" id="genero" required>

    <label for="plano">Plano:</label>
    <input type="text" name="plano" id="plano" required>

    <button type="submit" name="submit">Cadastrar</button>
   </form>
</body>
</html>