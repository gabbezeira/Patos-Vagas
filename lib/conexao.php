<?php 
$url = getenv('mysql://wnw9m3go3dz7ymc6:o7kvhj88jg2iob44@de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/mlvv59a1xr33ohk5');
$dbparts = parse_url($url);

$HOST = $dbparts['de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$USUARIO = $dbparts['wnw9m3go3dz7ymc6'];
$SENHA = $dbparts['o7kvhj88jg2iob44'];
$DB = ltrim($dbparts['mlvv59a1xr33ohk5']);

$conexao = new mysqli($HOST, $USUARIO, $SENHA, $DB) or die ("não foi possivel conectar");

?>