<?php

require_once "conexao.php";

// Função para excluir a tarefa do banco de dados com base no ID
function excluirTarefa($conn, $taskId) {
    // Consulta SQL para excluir a tarefa do banco de dados com base no ID
    $sql = "DELETE FROM tarefas WHERE taskId = '$taskId'";

    if ($conn->query($sql) === true) {
        return true; // Exclusão bem-sucedida
    } else {
        return false; // Erro ao excluir a tarefa
    }
}

// Verifica se foi recebido o parâmetro 'taskId' na requisição POST
if (isset($_POST['taskId'])) {
    $taskId = $_POST['taskId'];

    // Chama a função excluirTarefa para excluir a tarefa do banco de dados
    if (excluirTarefa($conn, $taskId)) {
        echo "Tarefa excluída com sucesso.";
    } else {
        echo "Erro ao excluir a tarefa.";
    }
}
?>
