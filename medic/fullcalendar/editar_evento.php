<?php

// Incluir o arquivo com a conexão com banco de dados
include_once './conexao.php';

// Receber os dados enviado pelo JavaScript
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Criar a QUERY editar evento no banco de dados
$query_edit_event = "UPDATE events SET title=:title, color=:color, start=:start, end=:end, obs=:obs WHERE id=:id";

// Prepara a QUERY
$edit_event = $conn->prepare($query_edit_event);

// Substituir o link pelo valor
$edit_event->bindParam(':title', $dados['edit_title']);
$edit_event->bindParam(':color', $dados['edit_color']);
$edit_event->bindParam(':start', $dados['edit_start']);
$edit_event->bindParam(':end', $dados['edit_end']);
$edit_event->bindParam(':obs', $dados['edit_obs']);
$edit_event->bindParam(':id', $dados['edit_id']);

// Verificar se consegui editar corretamente
if ($edit_event->execute()) {
    $retorna = ['status' => true, 'msg' => 'Evento editado com sucesso!', 'id' => $dados['edit_id'], 'title' => $dados['edit_title'], 'color' => $dados['edit_color'], 'start' => $dados['edit_start'], 'end' => $dados['edit_end'], 'obs' => $dados['edit_obs']];
} else {
    $retorna = ['status' => false, 'msg' => 'Erro: Evento não editado!'];
}

// Converter o array em objeto e retornar para o JavaScript
echo json_encode($retorna);
