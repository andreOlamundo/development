<?php
$host = "localhost";
$user = "root";
$pass = "sdb@debian";
$bd = "agenda";

$connect = mysql_connect($host, $user, $pass, $bd);

if(!$connect){
echo "<div class="alert alert-danger text-center">
<h3>Atenção</h3>
Não foi possivel conectar ao Banco de dados!<br>
ERRO:
".mysql_connect_error()."</div>".PHP_EOL;

}

if (!(mysqli_set_charset($connect, "utf8"))){
	echo "Problemas ao carregar Charset utf8. Erro:" mysql_error($connect);
	exit();
}

?>
