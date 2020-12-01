<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'usuario');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("não foi possivel conectar");

?>