<?php
$servername = "localhost";
$username = "root";
$password = "200812";
$dbname = "higia";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>