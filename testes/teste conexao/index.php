
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
    <link href="dashboard.css" rel="stylesheet">   
     <script src="\intranetSDB\bootstrap-3.3.7\docs\assets\js\ie-emulation-modes-warning.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="\intranetSDB\js\main.js"></script>
  </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <!-- Container (MeNU Section) -->
<div id="menu">
  
</div>





<?php 

include("conexao.php");

$consulta = "SELECT * FROM webcal_user";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>



<table>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Email</td>
<td>Data de Cadastro</td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
<td><?php echo $dado["cal_firstname"]; ?></td>
<td><?php echo $dado["cal_cargo"]; ?></td>
<td><?php echo $dado["cal_telephone"]; ?></td>
<td><?php echo $dado["cal_email"]; ?></td>
</tr>
<?php } ?>
</table>


</body>
</html>