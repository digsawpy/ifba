<?php
include 'db_connect.php';

// Verifica se 'turma_id' foi passado na URL
if (isset($_GET['turma_id'])) {
    $turma_id = $_GET['turma_id'];

    // Prepara e executa a consulta
    $sql = "SELECT a.nome AS aluno, n.disciplina, n.nota
            FROM notas n
            JOIN alunos a ON n.aluno_id = a.id
            WHERE n.turma_id = $turma_id";
    
    $result = $conn->query($sql);

    // Verifica se a consulta retornou resultados
    $rows = [];
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    $conn->close();
} else {
    $error = "Erro: Parâmetro 'turma_id' não foi passado.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios de Desempenho</title>
    <link rel="stylesheet" href="styles/styles_relatorios.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Relatórios de Desempenho</h1>
    </header>

    <?php if (!isset($error)): ?>
        <?php if (count($rows) > 0): ?>
            <table class="relatorios">
                <thead>
                    <tr>
                        <th>Aluno</th>
                        <th>Disciplina</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['aluno']); ?></td>
                            <td><?php echo htmlspecialchars($row['disciplina']); ?></td>
                            <td><?php echo htmlspecialchars($row['nota']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum resultado encontrado.</p>
        <?php endif; ?>
    <?php else: ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
</body>
</html>
