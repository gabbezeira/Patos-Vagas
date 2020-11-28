<?php
include('conexao.php');

if(empty($_POST["usuario"]) || empty($_POST["senha"])) {
    header('Location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '$usuario' and senha = md5('$senha')"; 

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    echo "<script language='javascript' type='text/javascript'>alert('Você está logado no sistema!')</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='../index.php';</script>";
    exit();
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Não foi possivel logar no sistema!')</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='../signin.php';</script>";
    exit();
}

?>