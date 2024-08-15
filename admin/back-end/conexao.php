<?php
    $usuario = "root";
    $senha = "12345678";
    $database = "higia";
    $host = "localhost";

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Erro: " . $mysqli->error);
        echo "erro";
    }
?>











