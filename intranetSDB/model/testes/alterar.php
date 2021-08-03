<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterar</h2>
<hr class="featurette-divider">
<?php 

@include("conexao_Adm.php");
$cal_login= $_GET['user_id'];

$sql="SELECT * FROM users WHERE user_id='user_id'";

$resultado=mysql_query($sql) or die("Não foi possível Realizar a consulta ao banco de dados");
while($linha=mysql_fetch_array($resultado)){
$user_id=$linha["user_id"];
$user_name=$linha["user_name"];
$user_email=$linha["user_email"];

}

?>


<table class="table table-striped">
<tr>
<td><form id="form1" neme="form1" method="post" action="alterar_db.php?cal_login=<?=$cal_login;?>">
<table class="table table-striped">
<tr>
<td coldspan="2" bgcolor="#FFFFCC"><div align="center"><strong>Informa&ccedil;&otilde;es Sobre Cliente: <?php echo .$user_name.$user_email ?></strong></div></td>
</tr>
<tr>
<td width="176" bgcolor="#cccccc"><div align="right">Nome:</div></td>
<td width="487"><label>
<input name="novo_user_name" type="text" id="novo_user_name" size="60" value="<?=$user_name;?>"/>
</label></td>
</tr>
<tr>
<td width="176" bgcolor="#cccccc"><div align="right">Sobrenome:</div></td>
<td width="487"><label>
<input name="novo_user_email" type="text" id="novo_user_email" size="60" value="<?=$user_email;?>"/>
</label></td>
</tr>
<tr>
<td valign="top">&nbsp;</td>
<td coldspan="2">&nbsp;</td>
</tr>

</table>
</form>
</td>
</tr>
</table>
</div>
</div>
</div>