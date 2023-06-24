<?php
$url = "localhost";
$usuario = "root";
$senha = "";
$base = "tarefas";

// Criar conexão
$conn = new mysqli($url, $usuario, $senha, $base);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>
