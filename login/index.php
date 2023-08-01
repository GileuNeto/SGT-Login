
<!DOCTYPE html>
<html>
<head>
    <title>SGT - Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="auth.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

