<?php
session_start();
require_once('./conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

if (isset($entrar)) {
    $verifica = mysql_query("SELECT * FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha'") or die("erro ao selecionar campo");
    if ($usuario == null && $senha == null) {
        echo "<script language='javascript' type='text/javascript'>
        alert('insira o usuário e senha');window.location.href='./login.php';</script>";
    }else {
     if (mysql_num_rows($verifica)<=0) {
         echo"<script language='javascript' type='text/javascript'>
         alert('usuario e/ou senha incorretos');window.location.href='./login.php';</script>";
         die();
     }else {
         setcookie("usuario",$usuario);
         header("Location:./home.php");
     }
    }
}
?>