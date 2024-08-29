<?php
include 'db_connect.php';

$nome_turma = $_POST['nome_turma'];
$ano_letivo = $_POST['ano_letivo'];

$sql = "INSERT INTO turmas (nome_turma, ano_letivo) VALUES ('$nome_turma', '$ano_letivo')";

if ($conn->query($sql) === TRUE) {
    $message = "Turma cadastrada com sucesso!";
    $message_type = "success";
} else {
    $message = "Erro: " . $sql . "<br>" . $conn->error;
    $message_type = "error";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <link rel="stylesheet" href="styles/styles_salvar_turma.css"> <!-- Incluindo o arquivo CSS específico -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1><?php echo $message_type == 'success' ? 'Sucesso!' : 'Erro'; ?></h1>
    </header>
    
    <div class="container">
        <p><?php echo $message; ?></p>
        <a href="cadastro_turma.php" class="btn voltar">Voltar ao Cadastro de Turmas</a> <!-- Botão para voltar ao cadastro -->
        <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão para voltar ao início -->
    </div>
</body>
</html>
