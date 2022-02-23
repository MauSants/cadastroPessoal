<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro</title>
</head>
<?php
session_start();
if ($_SESSION['alert']) {
    echo $_SESSION['alert'];
}
unset($_SESSION['alert']);
?>
<body>
    <form action="./cadastroBanco.php" method="post">
        <div class="header">
            <h2>Cadastre-se</h2>
        </div>
        <fieldset>
            <div class="content">
                <label for="nome">Nome </label>
                <input type="text" name="name" id="nome" class="dados"
                placeholder="Informe seu nome" value='' required>
            </div>
            <div>
                <label for="usuario">Usuário </label>
                <input type="text" name="usuario" id="usuario" class="dados"
                placeholder="Digite um nome de usuário" value='' required> 
            </div>
            <div>
                <label for="email">E-mail </label>
                <input type="text" name="email" id="email" class="dados"
                placeholder="Informe seu e-mail" required> 
            </div>
            <div>
                <label for="senha">Senha </label>
                <input type="password" name="senha" id="senha" class="dados"
                placeholder="Informe sua senha" required>     
            </div>
            <div class="esq">
                <label for="login">Já possui uma conta?</label>
                <a href="./login.php">Entrar</a>
            </div>
        </fieldset>
        <br>
        <div class="botao">
            <input type="submit" id=submit value="Cadastrar">
        </div>
    </form>
</body>
</html>