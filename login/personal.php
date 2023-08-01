<?php
session_start();
include "protect.php";

// Verifica se o usuário está autenticado e se é um personal
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'personal') {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Personal</title>
</head>
<body>
    <h1>Página do Personal</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
