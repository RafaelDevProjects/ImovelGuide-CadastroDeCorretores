<?php
$host = 'localhost'; // Endereço do servidor MySQL
$user = 'root';      // Usuário do MySQL
$pass = 'senha';          // Senha do MySQL
$db = 'cadastro_corretores';  // Nome do banco de dados

// Conexão com o banco
$conn = new mysqli($host, $user, $pass, $db);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
