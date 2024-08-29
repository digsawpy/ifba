<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    // Verifica se todos os campos necessários foram preenchidos
    if (!empty($nome) && !empty($data_nascimento) && !empty($endereco) && !empty($telefone)) {
        $sql = "INSERT INTO alunos (nome, data_nascimento, endereco, telefone) 
                VALUES ('$nome', '$data_nascimento', '$endereco', '$telefone')";

        if ($conn->query($sql) === TRUE) {
            $message = "Aluno cadastrado com sucesso!";
            $messageClass = 'success';
        } else {
            $message = "Erro: " . $sql . "<br>" . $conn->error;
            $messageClass = 'error';
        }
    } else {
        $message = "Por favor, preencha todos os campos obrigatórios.";
        $messageClass = 'error';
    }
} else {
    $message = "Acesso inválido.";
    $messageClass = 'error';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Aluno</title>
    <link rel="stylesheet" href="styles/styles_salvar_aluno.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div class="message">
            <p class="<?= $messageClass ?>"><?= $message ?></p>
        </div>
        <div class="buttons">
            <a href="cadastro_aluno.php" class="button">Voltar ao Cadastro de Alunos</a>
            <a href="index.php" class="button">Voltar ao Início</a>
        </div>
    </div>
</body>
</html>
