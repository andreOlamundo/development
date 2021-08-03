<?php
require_once("conexao.php");
include_once("usuariosDAO.php");
$usuariosDAO = new usuariosDAO();

$where = "id = ?";
$params = array(3);
$rs = $usuariosDAO->delete($where,$params);
var_dump($rs); /* Número de linhas afetadas */

echo "<br>\n";
$arr = $usuariosDAO->load();
foreach ($arr as $key => $row){
	echo $row->getId() . " - " . $row->getNome() . " - "
             . $row->getLogin() . " - " . $row->getSenha() . "<br>\n";
}
?>