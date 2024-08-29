<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Lançamento de Notas</title>
    <link rel="stylesheet" href="styles/styles_salvar_nota.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Resultado do Lançamento de Notas</h1>
    </header>
    
    <div class="resultado">
        <?php
        include 'db_connect.php';

        if (isset($_POST['aluno_id']) && isset($_POST['turma_id']) && isset($_POST['disciplina']) && isset($_POST['nota'])) {
            $aluno_id = $_POST['aluno_id'];
            $turma_id = $_POST['turma_id'];
            $disciplina = $_POST['disciplina'];
            $nota = $_POST['nota'];

            if (!empty($aluno_id) && !empty($turma_id) && !empty($disciplina) && !empty($nota)) {
                $sql = "INSERT INTO notas (aluno_id, turma_id, disciplina, nota) VALUES ('$aluno_id', '$turma_id', '$disciplina', '$nota')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p class='success'>Nota lançada com sucesso!</p>";
                } else {
                    echo "<p class='error'>Erro: " . $sql . "<br>" . $conn->error . "</p>";
                }
            } else {
                echo "<p class='error'>Erro: Todos os campos são obrigatórios.</p>";
            }
        } else {
            echo "<p class='error'>Erro: Todos os campos são obrigatórios.</p>";
        }

        $conn->close();
        ?>
        <a href="lancar_nota.php" class="btn voltar">Lançar Nova Nota</a> <!-- Botão para lançar nova nota -->
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
    </div>
</body>
</html>
