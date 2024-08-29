<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="styles/styles.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Cadastro de Alunos</h1>
    </header>
    <form class="cadastro" action="salvar_aluno.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Data de Nascimento: <input type="date" name="data_nascimento" required><br>
        Endereço: <input type="text" name="endereco"><br>
        Telefone: <input type="text" name="telefone"><br>
        <input type="submit" value="Salvar Aluno">
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
    </form>
</body>
</html>
