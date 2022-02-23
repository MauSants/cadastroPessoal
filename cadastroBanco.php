<?php
session_start();
require_once('./conexao.php');

$action = $_POST['action'];
$id = $_POST['id'];
$name = $_POST['name'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

function existeUsuario($usuario, $email){
    $cmd = "SELECT * FROM cadastro WHERE usuario='$usuario' OR email= '$email'";
    $result = mysql_query($cmd);
    $rows = mysql_num_rows($result);
    if (1 <= $rows) {
        return true;
    }else {
        return false;
    }
}

    $existe = existeUsuario($usuario, $email);
        if (!$existe) {
            if (!$action) {
                $sql = "INSERT INTO cadastro (name, usuario, email, senha) VALUES ('$name', '$usuario', '$email', '$senha')";

                mysql_query($sql, $conexao) or die ("Query incorreta: ['.$sql . '] <br>".mysql_errno(). ': '.mysql_error());

                if (mysql_affected_rows() > 0) {
                    $_SESSION['alert'] = "<script>alert('Usuário cadastrado com sucesso, por gentileza, efetuar o login!')</script>";
                    header("Location: ./login.php");    
                }else {
                    echo "<h1>Erro ao realizar o cadastro!</h1>";
                }
            }
        } elseif($existe){
            $_SESSION['alert'] = "<script>alert('Já existe um usuário registrado com os mesmos dados')</script>";
            header("Location: ./cadastro.php");

        }
?>