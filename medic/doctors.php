<?php
// Conectar ao banco de dados
include 'conexao.php'; // Arquivo contendo a conexão com o banco

// Verificar se o ID foi passado na URL para editar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar o registro a ser editado
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);

    // Verificar se encontrou o registro
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "Registro não encontrado!";
        exit;
    }
}

// Atualizar os dados no banco de dados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Prevenir SQL Injection
    $nome = $conn->real_escape_string($nome);
    $email = $conn->real_escape_string($email);
    $telefone = $conn->real_escape_string($telefone);

    // Atualizar o registro no banco de dados
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
        header("Location: listar_usuarios.php"); // Redirecionar após a atualização
        exit;
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

<body>
    <h2>Editar Usuário</h2>

    <!-- Formulário de edição -->
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $usuario['telefone']; ?>" required><br><br>

        <input type="submit" value="Atualizar">
    </form>
</body>

</html>