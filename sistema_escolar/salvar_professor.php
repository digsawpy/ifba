<?php
include 'db_connect.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $disciplina = $_POST['disciplina'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    // Verifica se os campos obrigatórios foram preenchidos
    if (!empty($nome) && !empty($disciplina) && !empty($email) && !empty($telefone)) {
        // Prepara a consulta SQL para inserir os dados
        $sql = "INSERT INTO professores (nome, disciplina, email, telefone) 
                VALUES ('$nome', '$disciplina', '$email', '$telefone')";

        // Executa a consulta e verifica se foi bem-sucedida
        $mensagem = $conn->query($sql) === TRUE 
            ? "<p class='success'>Professor cadastrado com sucesso!</p>" 
            : "<p class='error'>Erro: " . $conn->error . "</p>";
    } else {
        $mensagem = "<p class='error'>Por favor, preencha todos os campos obrigatórios.</p>";
    }
} else {
    $mensagem = "<p class='error'>Acesso inválido.</p>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="styles/styles_salvar_professor.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Resultado do Cadastro</h1>
    </header>
    
    <div class="resultado">
        <?= $mensagem ?> <!-- Exibe a mensagem de sucesso ou erro -->
        <a href="cadastro_professor.php" class="btn voltar">Cadastrar Novo Professor</a> <!-- Botão para cadastrar novo professor -->
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
    </div>
</body>
</html>
