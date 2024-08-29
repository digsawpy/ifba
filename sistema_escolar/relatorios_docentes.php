<?php
include 'db_connect.php';

// Consulta para obter as informações dos professores, turmas e alunos
$sql = "SELECT p.nome AS professor_nome, p.disciplina, t.nome_turma, t.ano_letivo,
               COUNT(n.aluno_id) AS total_alunos
        FROM professores p
        JOIN turma_professores tp ON p.id = tp.professor_id
        JOIN turmas t ON tp.turma_id = t.id
        LEFT JOIN notas n ON t.id = n.turma_id
        GROUP BY p.id, t.id
        ORDER BY p.nome, t.ano_letivo";

$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta ao banco de dados: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios Docentes</title>
    <link rel="stylesheet" href="styles/styles_relatorios_docentes.css"> <!-- Incluindo o arquivo CSS específico -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Relatórios Docentes</h1>
    </header>
    
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Professor</th>
                        <th>Disciplina</th>
                        <th>Turma</th>
                        <th>Ano Letivo</th>
                        <th>Total de Alunos</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['professor_nome'] . "</td>
                        <td>" . $row['disciplina'] . "</td>
                        <td>" . $row['nome_turma'] . "</td>
                        <td>" . $row['ano_letivo'] . "</td>
                        <td>" . $row['total_alunos'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum resultado encontrado.</p>";
        }
        ?>
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão para voltar ao início -->
    </div>
</body>
</html>

<?php
$conn->close();
?>
