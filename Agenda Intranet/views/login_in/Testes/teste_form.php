
<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterar/Excluir</h2>
<hr class="featurette-divider">


<?php

@include("../model/config/conec.php");

$sql = "SELECT * FROM users ORDER BY user_name ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>



<form method="get" action="views/login_in/excluir.php" name="formpar">
    <div class="form-group">
      <div class="col-sm-4">
    
<label for="user" >Select list (select 
one):</label>
<select class="form-control" id="alter_user" type="text" name="alter_user" required>

<?php while($linha = mysql_fetch_array($resultado)){ 
$user_id = $linha["user_id"];
$user_name = $linha["user_name"];
?>

<option><?=$user_name;?><br></option>
<?php
}
?>
</select><br>

<input id="alter_user" type="submit" name="formpar" required  class="btn btn-success" value="CADASTRAR"/>


</div>
</div>
</form>

</div>
</div>
</div>

