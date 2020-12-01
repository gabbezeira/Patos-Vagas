<?php 
$url = getenv('mysql://wnw9m3go3dz7ymc6:o7kvhj88jg2iob44@de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/mlvv59a1xr33ohk5');
$dbparts = parse_url($url);

define('HOST', $dbparts['de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com']);
define('USUARIO', $dbparts['wnw9m3go3dz7ymc6']);
define('SENHA', $dbparts['o7kvhj88jg2iob44']);
define('DB', $dbparts['mlvv59a1xr33ohk5']);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("não foi possivel conectar");

?>