<?php
mysql_connect("localhost","root","sdb@debian");
mysql_select_db("sdb_intranet");
mysql_set_charset('UTF8');

$sql = "SELECT  FROM cargo ORDER BY nome_cargo ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>