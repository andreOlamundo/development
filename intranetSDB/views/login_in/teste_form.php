
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>INTRANET_SDB</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\intranetSDB\images\favicon.png">
    <link href="\intranetSDB\bootstrap-3.3.7\dist\css\bootstrap.min.css" rel="stylesheet">
    <link href="\intranetSDB\bootstrap-3.3.7\docs\assets\css\ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="/intranetSDB/dashboard/dashboard.css" rel="stylesheet">  
     <script src="\intranetSDB\bootstrap-3.3.7\docs\assets\js\ie-emulation-modes-warning.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="\intranetSDB\js\main.js"></script>
  </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <!-- Container (MeNU Section) -->
<div id="menu">
  
</div>


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

<form method="post" action="register.php" name="registerform">
    <div class="form-group">
      <label for="sel1" >Select list (select one):</label>
      <select class="form-control" id="sel1">

<?php while($linha = mysql_fetch_array($resultado)){ 
$user_id = $linha["user_id"];
$user_name = $linha["user_name"];
?>

<option><?=$user_name;?><br></option>

<?php
echo "<td width=20><a href='alterar.php?cal_login=$cal_login'>Alterar</a><br></td>";
echo "<td width=20><a href='excluir.php?cal_login=$cal_login'>Excluir</a><br></td>";
echo "</tr>";
}
?>
</table>

<div class="container-fluid">
<div class="row">
<a href="cadastro_lr.php"><button type="button" class="btn btn-default">CADASTRAR</button></a>
<a href="table_list_Adm.php"><button type="button" class="btn btn-default">RETORNAR</button></a>
<hr class="featurette-divider">
</div>
</div>


</div>

</div>
<div id="footer">
  
</div>
</div>


</body>
</html>