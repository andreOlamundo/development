  <head>
    <title>INTRANET_SDB</title>
     <meta name="description" content="PROJETO INTRANETSDB">
    <meta name="author" content="TI SANRIO"> 
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="views/images/favicon.gif">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


     </head>

<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterando</h2>
<hr class="featurette-divider">
<table class="table table-hover">

<?php 

include("conexao.php");
$user_id = $_POST['user_id'];
$consulta = "SELECT * FROM users ORDER BY user_name ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

  <tr>
      <td>
          ID
      </td>
  </tr>
                 
<?php while($dado = $con->fetch_array()){ ?>            
<tr>
<td><?php echo $dado["user_id"];?></td>

  </tr>
  <?php } ?>
    </table>


</div>
</div>
</div>
