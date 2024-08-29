<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançar Nota</title>
    <link rel="stylesheet" href="styles/styles_lancar_nota.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Lançar Nota</h1>
    </header>

    <div class="form-container">
        <form action="salvar_nota.php" method="post">
            <label for="aluno_id">Aluno:</label>
            <select name="aluno_id" id="aluno_id">
                <?php
                $result = $conn->query("SELECT id, nome FROM alunos");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }
                ?>
            </select><br>

            <label for="turma_id">Turma:</label>
            <select name="turma_id" id="turma_id">
                <?php
                $result = $conn->query("SELECT id, nome_turma FROM turmas");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome_turma'] . "</option>";
                }
                ?>
            </select><br>

            <label for="disciplina">Disciplina:</label>
            <input type="text" name="disciplina" id="disciplina"><br>

            <label for="nota">Nota:</label>
            <input type="text" name="nota" id="nota"><br>

            <input type="submit" value="Salvar Nota" class="btn">
        </form>
    </div>
</body>
</html>

<?php $conn->close(); ?>
