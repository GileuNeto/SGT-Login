<?php
session_start();

require_once ('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obter as credenciais enviadas pelo usuári
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Obtém as credenciais enviadas pelo usuário
    $sql = "SELECT * FROM usuarios WHERE email = '$username' AND senha = '$password'";
    $sql_query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);
    $result = $sql_query->num_rows;

    if ($result === 1) {
        $row = $sql_query->fetch_assoc();
        if(!isset($_SESSION)) {
        }
            // Login bem-sucedido
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['role'] = $row['role'];

            // Redireciona para a página apropriada com base no papel (role)
            switch ($_SESSION['role']) {
                case 'admin':
                    header('Location: admin.php');
                    break;
                case 'aluno':
                    header('Location: aluno.php');
                    break;
                case 'personal':
                    header('Location: personal.php');
                    break;
                default:
                    header('Location: index.php');
            }
        exit();
        } else {
            echo "Usuário ou senha incorretos. Tente novamente.";
            echo ("<a href='index.php'>Voltar</a>");
        }
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.";
    }

?>
