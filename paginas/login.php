<?php 

session_start();

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");


/* segurança
if ($email === false) {
    header('Location: login.php?erro=email_invalido');
    exit;
}
if (strlen($senha) < 8) {
    header('Location: login.php?erro=senha_curta');
    exit;
}
*/
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="digite seu email" required>
        <input type="password" name="senha" placeholder="digite sua senha" required>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>