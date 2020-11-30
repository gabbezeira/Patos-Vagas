<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $SESSION['usuario_existe'] = TRUE;
    header('location: ../index.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, senha, nome, telefone, data_cadastro) 
VALUES ('$email', '$senha', '$nome', '$telefone', NOW())";

if($conexao->query($sql) == TRUE) {
    $SESSION['status_cadastro'] == TRUE;
}

$conexao->close();
    header('location: ../signin.php');
    exit;
?>