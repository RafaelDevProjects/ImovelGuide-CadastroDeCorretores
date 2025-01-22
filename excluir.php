<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM corretores WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    header("Location: index.php?status=Excluído com sucesso");
} else {
    header("Location: index.php?status=Erro ao excluir");
}
?>
