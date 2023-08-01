<?php
session_start();

include "protect.php";

// Verifica se o usuário está autenticado e se é um admin
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Admin</title>
</head>
<body>
    <h1>Página do Admin</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
