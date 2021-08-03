<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Excluir</h2>
<hr class="featurette-divider">
<?php 


@include("conexao_Adm.php");

$user_id = $_GET['user_id'];

$query = "DELETE FROM users WHERE user_id = '$user_id'";

$deletar = mysql_query($query);
if ($deletar) {
  echo "Registro deletado com sucesso";
  } else {
  echo "Não foi possível excluir o Registro, tente novamente.";
  echo "Dados sobre o erro:" . mysql_error();
  
}

?>
</div>
</div>
</div>
