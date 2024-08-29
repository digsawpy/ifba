<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="styles/styles_cadastro_professor.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Cadastro de Professor</h1>
    </header>
    
    <div class="form-container">
        <form action="salvar_professor.php" method="post" class="form-cadastro-professor">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="disciplina" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required><br>

            <button type="submit" class="btn">Salvar Professor</button>
        </form>
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
    </div>
</body>
</html>
