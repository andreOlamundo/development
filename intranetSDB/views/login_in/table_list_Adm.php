<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Lista de Colaboradores</h2>
<hr class="featurette-divider">
<?php 

include("conexao.php");

$consulta = "SELECT * FROM webcal_user WHERE cal_cargo !='' ORDER BY cal_firstname ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<div id='menu' class="row">
<a href='page.php?cod=5.2'><button type="button" class="btn btn-primary">CADASTRAR</button></a>
<a href='page.php?cod=5.3'><button type="button" class="btn btn-warning">ALTERAR/EXCLUIR</button></a>
</div>

<div class="container-fluid">
<div class="row">
<table class="table table-striped">
<tr>

<td><strong>NOME</strong></td>

<td><strong>CARGO</strong></td>
<td><strong>DEPARTAMENTO</strong></td>
<td><strong>RAMAL</strong></td>
<td><strong>EMAIL</strong></td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
<td><?php echo $dado["cal_firstname"] . " " . $dado ["cal_lastname"]; ?></td>

<td><?php echo $dado["cal_cargo"]; ?></td>
<td><?php echo $dado["cal_departamento"]; ?></td>
<td><?php echo $dado["cal_telephone"]; ?></td>
<td><?php echo $dado["cal_email"]; ?></td>



</tr>
<?php } ?>
</table>
</div>
</div>


<div id='menu' class="row">
<a href='page.php?cod=5.2'><button type="button" class="btn btn-primary">CADASTRAR</button></a>
<a href='page.php?cod=5.3'><button type="button" class="btn btn-warning">ALTERAR/EXCLUIR</button></a>

 <hr class="featurette-divider">
</div>
</div>


</div>

</div>


</body>
</html>