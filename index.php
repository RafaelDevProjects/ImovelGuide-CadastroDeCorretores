<?php 
include 'conexao.php'; 

// Variáveis para editar o formulário
$id = $cpf = $creci = $nome = '';
$btn_label = "Enviar"; // Label do botão
$is_edit = false;

// Carregar dados para edição
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $result = $conn->query("SELECT * FROM corretores WHERE id = $id");
    if ($result && $row = $result->fetch_assoc()) {
        $cpf = $row['cpf'];
        $creci = $row['creci'];
        $nome = $row['nome'];
        $btn_label = "Salvar";
        $is_edit = true;
    }
}

// Mensagem de status
$status_msg = isset($_GET['status']) ? htmlspecialchars($_GET['status']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Corretores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastro de Corretores</h1>

    <!-- Mensagem de status -->
    <?php if ($status_msg): ?>
        <div class="status-msg"><?= $status_msg ?></div>
    <?php endif; ?>

    <!-- Formulário -->
    <form action="processar.php" method="POST" id="form-corretor">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" maxlength="11" placeholder="Digite o CPF" required>
        
        <label for="creci">Creci:</label>
        <input type="text" id="creci" name="creci" placeholder="Digite o Creci" required>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o Nome" required>
        
        <button type="submit" id="submit-btn">Enviar</button>
    </form>

    <!-- Tabela de Registros -->
    <h2>Lista de Corretores</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Creci</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="corretor-list">
            <?php
            $sql = "SELECT * FROM corretores";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['nome']); ?></td>
                    <td><?= $row['cpf']; ?></td>
                    <td><?= $row['creci']; ?></td>
                    <td>
                        <a href="?edit_id=<?= $row['id']; ?>">Editar</a>
                        <a href="excluir.php?id=<?= $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php
                endwhile;
            else:
            ?>
                <tr><td colspan="5">Nenhum registro encontrado</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
