<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <?php
        session_start();
        if ($_SESSION['alert']) {
            echo $_SESSION['alert'];
        }
        unset($_SESSION['alert']);
    ?>
</head>
<body>
    <form action="./loginBanco.php" method="post">
        <div class="header">
            <h2>Login</h2>
        </div>
        <fieldset>
            <div>
                <label for="usuario">Usuário </label>
                <input type="text" name="usuario" id="usuario" class="dados"
                placeholder="Digite seu nome de usuário" value='' required> 
            </div>
            <div>
                <label for="senha">Senha </label>
                <input type="password" name="senha" id="senha" class="dados"
                placeholder="Informe sua senha" value='' required> 
            </div>
            <br>
            <div>
                <label for="cad" class="esq">Não tem uma conta?</label>
                <a href="./cadastro.php" class="esq">cadastre-se!</a>
            </div>
        </fieldset>
        <br>
        <div class="botao">
            <input type="submit" name="entrar" id=submit value="Entrar">
        </div>
    </form>
</body>
</html>