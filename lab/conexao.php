<?php
    $usuario = "root";
    $senha = "200812";
    $database = "higia";
    $host = "localhost";

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Erro: " . $mysqli->error);
        echo "erro";
    }
?>















