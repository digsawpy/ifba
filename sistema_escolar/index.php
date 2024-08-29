<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Escolar</title>
    <link rel="stylesheet" href="styles/styles.css"> <!-- Incluindo o arquivo CSS -->
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Bem-vindo ao Sistema de Gestão Escolar</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="cadastro_aluno.php">Cadastro de Alunos</a></li>
            <li><a href="cadastro_professor.php">Cadastro de Professores</a></li>
            <li><a href="cadastro_turma.php">Cadastro de Turmas</a></li>
            <li><a href="lancar_nota.php">Lançamento de Notas</a></li>
            <li><a href="selecionar_turma.php">Relatórios de Desempenho</a></li>
			<li><a href="relatorios_docentes.php">Relatórios de Docentes</a></li>
        </ul>
    </nav>
</body>
</html>
