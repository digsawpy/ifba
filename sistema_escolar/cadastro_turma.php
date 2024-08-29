<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <link rel="stylesheet" href="styles/styles_cadastro_turma.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Cadastro de Turma</h1>
    </header>
    
    <div class="container">
        <form action="salvar_turma.php" method="post" class="form-cadastro">
            <label for="nome_turma">Nome da Turma:</label>
            <input type="text" id="nome_turma" name="nome_turma" required><br>

            <label for="ano_letivo">Ano Letivo:</label>
            <input type="text" id="ano_letivo" name="ano_letivo" required><br>

            <button type="submit" class="btn">Salvar Turma</button>
        </form>
        
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
    </div>
</body>
</html>
