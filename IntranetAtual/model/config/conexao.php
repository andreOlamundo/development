<?php
$host = "localhost";
$usuario = "root";
$senha = "sdb@debian";
$bd = "DB_INTRANET";

$mysqli = new mysqli($host, $usuario, $senha, $bd);
$mysqli->set_charset('utf8');

if($mysqli->connect_errno)
echo "Falha na conexão (".$mysqli->connect_errno.")" .$mysqli->connect_error;

?>
