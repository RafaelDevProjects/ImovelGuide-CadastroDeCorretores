<?php
include 'conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];
$nome = $_POST['nome'];

// Validação básica no PHP
if (!is_numeric($cpf) || strlen($cpf) != 11 || strlen($creci) < 2 || strlen($nome) < 2) {
    header("Location: index.php?status=Erro: Dados inválidos");
    exit();
}

try {
    if ($id) {
        // Atualizar registro existente
        $sql = "UPDATE corretores SET cpf = ?, creci = ?, nome = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $cpf, $creci, $nome, $id);
        $msg = "Atualizado com sucesso!";
    } else {
        // Inserir novo registro
        $sql = "INSERT INTO corretores (cpf, creci, nome) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $cpf, $creci, $nome);
        $msg = "Cadastro realizado com sucesso!";
    }

    if ($stmt->execute()) {
        header("Location: index.php?status=$msg");
    } else {
        header("Location: index.php?status=Erro ao processar dados");
    }
} catch (Exception $e) {
    header("Location: index.php?status=Erro: " . $e->getMessage());
}
