<?php 

include("intranetSDB/conect.php");
$consulta = "SELECT * FROM webcal_user";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<html>
<head>
<meta charset="utf8">
</head>
<body>
<table>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Email</td>
<td>Data de Cadastro</td>
</tr>
<?php while($dado = $con->fetch_array()){?>
<tr>
<td><? php echo $dado["cal_login"];?></td>
<td><? php echo $dado["cal_passwd"];?></td>
<td><? php echo $dado["cal_lastname"];?></td>
<td><? php echo $dado["cal_firstname"];?></td>
</tr>
<?php } ?>
</table>


</body>
</html>