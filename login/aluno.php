<?php
session_start();
include "protect.php";

// Verifica se o usuário está autenticado e se é um aluno
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'aluno') {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Aluno</title>
</head>
<body>
    <h1>Página do Aluno</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
