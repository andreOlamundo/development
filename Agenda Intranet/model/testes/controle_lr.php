<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterar/Excluir</h2>
<hr class="featurette-divider">
<?php 

@include("conec.php");

$sql = "SELECT * FROM users ORDER BY user_name ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>



<table class="table table-striped">
<tr>

<th>NOME:</th>
<th>ALTERAR:</th>
<th>EXCLUIR:</th>

</tr>
<?php while($linha = mysql_fetch_array($resultado)){ 

$user_name = $linha["user_name"];
$user_email = $linha["user_email"];

?>


<tr>
<td><?=$user_name;?><br></td>


<?php
echo "<td width=20><a href='alterar.php?user_name=$user_name'>Alterar</a><br></td>";
echo "<td width=20><a href='excluir.php?user_name=$user_name'>Excluir</a><br></td>";
echo "</tr>";
}
?>
</table>

<div class="container-fluid">
<div class="row">
<a href="register.php"><button type="button" class="btn btn-default">CADASTRAR</button></a>
<a href="model/table_list_Adm.php"><button type="button" class="btn btn-default">RETORNAR</button></a>
<hr class="featurette-divider">
</div>
</div>


</div>

</div>

</div>
