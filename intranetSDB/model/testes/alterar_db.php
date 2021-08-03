<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterando</h2>
<hr class="featurette-divider">
<?php 

$user_name= $_POST["novo_user_name"];
$user_email=$_POST["novo_user_email"];
$user_id=$_GET['$user_id'];

@include("conexao_Adm.php");


$sql="UPDATE webcal_user SET user_name='$user_name', user_email = '$user_email' WHERE user_id = '$user_id'";
$resultado=mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados!");
echo "<h1>Registro Alterado com sucesso!</h1>";

?>
</div>
</div>
</div>