<?php
include 'db_connect.php';

// Consulta para obter as turmas
$sql = "SELECT id, nome_turma FROM turmas";
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
    <title>Selecionar Turma</title>
    <link rel="stylesheet" href="styles/styles_selecionar_turma.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Selecionar Turma</h1>
    </header>
    
    <form action="relatorios.php" method="get" class="form-selecionar-turma">
        <label for="turma">Turma:</label>
        <select name="turma_id" id="turma">
            <?php
            // Preenche o dropdown com as turmas disponíveis
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome_turma'] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhuma turma disponível</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit" class="btn">Ver Relatório</button>
    </form>

    <a href="index.php" class="btn voltar">Voltar ao Início</a> <!-- Botão Voltar ao Início -->
</body>
</html>

<?php
$conn->close();
?>
