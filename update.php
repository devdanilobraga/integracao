<?php
// Incluir o arquivo de conexão
require_once "conexao.php";

// Verifica se foi recebido o parâmetro 'id' na requisição POST
if (isset($_POST['taskId'])) {
    $taskId = $_POST['taskId'];
    $novoTitulo = $_POST['titulo'];
    $novaDescricao = $_POST['descricao'];
    $novaDataFinal = $_POST['data_final'];

    // Consulta SQL para atualizar os dados da tarefa no banco de dados
    $sql = "UPDATE tarefas SET titulo = '$novoTitulo', descricao = '$novaDescricao', data_final = '$novaDataFinal' WHERE id_tarefas = '$taskId'";

    if ($conn->query($sql) === true) {
        echo "Tarefa atualizada com sucesso.";
    } else {
        echo "Erro ao atualizar a tarefa: " . $conn->error;
    }
} else {
    // ID da tarefa não foi fornecido
    echo "ID da tarefa não fornecido.";
}

// Fechar a conexão
$conn->close();
?>
