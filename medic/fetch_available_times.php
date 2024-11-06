<?php
require_once './database.php'; // Inclua o arquivo de conexão com o banco de dados

if (isset($_POST['medico']) && isset($_POST['data'])) {
    $medico = $_POST['medico'];
    $data = $_POST['data'];

    // Horários padrão que queremos oferecer
    $horarios_disponiveis = ['08:00:00', '10:00:00', '13:00:00', '15:00:00'];

    // Consulta para buscar os horários já ocupados para o médico e data especificados
    $query = "SELECT horario FROM appointments WHERE medico = ? AND data = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $medico, $data);
    $stmt->execute();
    $result = $stmt->get_result();

    // Coleta os horários já ocupados
    $horarios_ocupados = [];
    while ($row = $result->fetch_assoc()) {
        $horarios_ocupados[] = $row['horario'];
    }

    // Filtra os horários disponíveis
    $horarios_livres = array_diff($horarios_disponiveis, $horarios_ocupados);

    // Retorna os horários livres como JSON
    echo json_encode(array_values($horarios_livres));
}
?>