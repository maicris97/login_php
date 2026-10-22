<?php
$mensagem = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario === "admin" && $senha === "1234"){
        $mensagem = "Login efetuado com sucesso!";
    } else{
        $mensagem = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Entrar</h1>
    <p><?= $mensagem ?></p>

    <form method="post">
        <p><input type="text" name="usuario" placeholder="usuario"></p>
        <p><input type="password" name="senha" placeholder="senha"></p>
        <button>Entrar</button>
    </form>
</body>
</html>