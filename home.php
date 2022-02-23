<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleHome.css">
    <title>Home</title>
</head>
<?php
    session_start();
        if ($_SESSION['alert']) {
            echo $_SESSION['alert'];
        }
        unset($_SESSION['alert']);
?>
<body>
    <div class="header">
        <?php
        $usuario_cookie = $_COOKIE['usuario'];
        if (isset($usuario_cookie)) {
            echo"<h1>Bem-Vindo, $usuario_cookie <br></h1>";
        }
        ?>
    </div>
        <div class="content">
                Suas informações cadastradas são: <br><br>
                <?php
                session_start();
                require_once('./conexao.php');
                $usuario_cookie = $_COOKIE['usuario'];
                $sql = "SELECT * FROM cadastro WHERE usuario LIKE '$usuario_cookie'";
                $dados = mysql_query($sql, $conexao) or die('Query incorreta: '.$sql.'<br>'.mysql_errno().": ".mysql_error());
                while ($row = mysql_fetch_assoc($dados)) {
                    $id = $row['id'];
                    echo " Seu id: $id <br><br>";
                    $name = $row['name'];
                    echo "Nome: $name <br><br>"; 
                    $usuario = $row['usuario'];
                    echo "Usuario: $usuario <br><br>";
                    $senha = $row['senha'];
                    echo "Senha: $senha <br><br>";
                    $email = $row['email'];
                    echo "E-mail: $email <br><br>";
                }
                ?>        
        </div>
    
</body>
</html>