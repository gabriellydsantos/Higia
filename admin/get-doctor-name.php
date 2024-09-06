<?php
include 'database.php';

if (isset($_POST['carteirinha'])) {
    $carteirinha = $_POST['carteirinha'];

    // Prepara e executa a consulta SQL para buscar o nome do médico
    $sql = "SELECT CONCAT(first_name, ' ', last_name) AS doctor_name FROM doctors WHERE carteirinha = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $carteirinha);
        $stmt->execute();
        $stmt->bind_result($doctor_name);
        $stmt->fetch();
        echo $doctor_name;
        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta.";
    }

    $conn->close();
}
?>