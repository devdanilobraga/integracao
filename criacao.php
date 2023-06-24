<?php
// Incluir o arquivo de conexão
require_once "conexao.php";

// Receber os dados enviados via POST
$title = $_POST['title'];
$description = $_POST['description'];
$dueDate = $_POST['dueDate'];

// Consulta SQL para inserir os dados no banco de dados
$sql = "INSERT INTO tarefas (titulo, descricao, data_final) VALUES ('$title', '$description', '$dueDate')";

if ($conn->query($sql) === true) {
    echo "Tarefa adicionada com sucesso.";
} else {
    echo "Erro ao adicionar a tarefa: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
