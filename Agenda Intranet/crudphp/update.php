<?php
require_once("conexao.php");
include_once("usuariosDAO.php");
$usuariosDAO = new usuariosDAO();

$fields = array("login","senha");
$params = array("teste login","teste senha",3);
$where = "id = ?";
$rs = $usuariosDAO->update($fields,$params,$where);
var_dump($rs); /* N�mero de linhas afetadas */

echo "<br>\n";
$arr = $usuariosDAO->load();
foreach ($arr as $key => $row){
	echo $row->getId() . " - " . $row->getNome() . " - "
             . $row->getLogin() . " - " . $row->getSenha() . "<br>\n";
}
?>