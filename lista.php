<?php
// Incluir o arquivo de conexão
require_once "conexao.php";

// Consulta SQL para ler os dados do banco de dados
$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Array para armazenar as tarefas
    $tasks = array();

    // Loop pelos resultados e adicionar as tarefas ao array
    while ($row = $result->fetch_assoc()) {
        $task = array(
            'taskId' =>$row['taskId'],
            'titulo' => $row['titulo'],
            'descricao' => $row['descricao'],
            'data_final' => date("d/m/Y", strtotime($row['data_final']))
        );

        // Adicionar a tarefa ao array de tarefas
        $tasks[] = $task;
    }

    // Converter o array em JSON
    $jsonTasks = json_encode($tasks);

    // Enviar a resposta como JSON
    header('Content-Type: application/json');
    echo $jsonTasks;
} else {
    // Enviar uma resposta vazia como JSON
    echo json_encode(array());
}

// Fechar a conexão
$conn->close();
?>
