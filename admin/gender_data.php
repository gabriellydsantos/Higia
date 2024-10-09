<?php
// Conexão com o banco de dados
$servername = "localhost"; // Altere se necessário
$username = "root"; // Altere se necessário
$password = "200812"; // Altere se necessário
$dbname = "higia"; // Altere para o nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para contar pacientes por mês e gênero
$sql = "SELECT MONTH(created_at) AS month, gender, COUNT(*) AS count FROM patients GROUP BY month, gender ORDER BY month";
$result = $conn->query($sql);

// Inicializa o array de dados
$data = [
    'Masculino' => array_fill(1, 12, 0), // Preenche com 0 para todos os meses
    'Feminino' => array_fill(1, 12, 0), // Preenche com 0 para todos os meses
];

// Preenche o array com os dados do banco
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[$row['gender']][$row['month']] = (int)$row['count'];
    }
}

// Fecha a conexão com o banco de dados
$conn->close();

// Retorna os dados em formato JSON
header('Content-Type: application/json');
echo json_encode($data);

?>