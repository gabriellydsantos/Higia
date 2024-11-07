<?php
session_start(); 

// Conectando ao Banco de Dados
$servername = "localhost";
$username = "root";
$password = "200812";
$dbname = "higia";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se há uma pesquisa sendo realizada
$query = "";
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT * FROM doctors WHERE username LIKE ? OR department LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = '%' . $query . '%';
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT * FROM doctors";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="doctors.css">
    <title>Higia</title>
</head>

<body>
    <div class="navbar">
        <?php include 'ecommerc/navbar.html'; ?>
    </div>

    <section class="doctors">
        <div class="doctors-text">
            <h1>Conheça nossos Médicos</h1>
            <p>A Clínica Higia possui uma vasta equipe de profissionais qualificados <br> prontos para te atender a
                qualquer momento.</p>
            <a href="#pesquisar" class="btn">Ver médicos</a>
        </div>
    </section>

    <div id="pesquisar">
        <!-- Barra de Pesquisa -->
        <form method="get" class="search-container">
            <input type="text" name="query" placeholder="Pesquisar médico" class="search-input"
                value="<?php echo htmlspecialchars($query); ?>">
            <button class="search-button" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px"
                    height="24px">
                    <path
                        d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 5c.39.39 1.02.39 1.41 0s.39-1.02 0-1.41l-5-5zm-6 0C8.01 14 6 11.99 6 9.5S8.01 5 10.5 5 15 7.01 15 9.5 12.99 14 10.5 14z" />
                </svg>
            </button>
        </form>
    </div>

    <!-- Listagem de Médicos -->
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
    <div class="containerCaixa">
        <div class="card">
            <div class="card-image">
                <img <?php echo "src='" . $row["image"] . "'"; ?> alt="Imagem do Médico">
            </div>
            <div class="card-content">
                <h2><?php echo htmlspecialchars($row["username"]); ?></h2>
                <p><?php echo "Carteirinha: " . htmlspecialchars($row["carteirinha"]); ?></p>
                <p><?php echo "Departamento: " . htmlspecialchars($row["department"]); ?></p>
                <p><?php echo "Data de nascimento: " . date("d.m.Y", strtotime($row['birth_date'])); ?></p>
                <p><?php echo "Status: " . htmlspecialchars($row["status"]); ?></p>
            </div>
        </div>
    </div>
    <?php  
        }
    } else {
        echo "<p>Nenhum médico encontrado para '<strong>" . htmlspecialchars($query) . "</strong>'.</p>";
    }

    $conn->close();
    ?>

    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>
</body>

</html>