<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Lista de Contatos <span class="glyphicon glyphicon-list-alt"></span></h2>
<hr class="featurette-divider">
<?php 

include("conexao.php");

$consulta = "SELECT * FROM users ORDER BY user_namecolab ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<div class="panel-group" id="accordion">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">LISTA DE COLABORADORES</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
        

<table class="table table-hover">
<tr>

<td><strong>NOME</strong></td>
<td><strong>CARGO</strong></td>
<td><strong>DEPARTAMENTO</strong></td>
<td><strong>RAMAL</strong></td>
<td><strong>EMAIL</strong></td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
<td><?php echo $dado["user_namecolab"] . " " . $dado ["user_sobrenome"]; ?></td>

<td><?php echo $dado["cod_cargo"]; ?></td>
<td><?php echo $dado["cod_depto"]; ?></td>
<td><?php echo $dado["user_ramal"]; ?></td>
<td><?php echo $dado["user_email"]; ?></td>



</tr>
<?php } ?>
</table>

        </div>
      </div>
    </div>



    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">OUTRAS INFORMAÇÔES</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        <p>CNPJ 57.170.771/0001-44 / Website:<a href="http://www.sanrio.com.br"> www.sanrio.com.br</a></p>
    <p>Phone: (+55 11) 3515-5150 / E-mail:<a href="mailto:sanriodobrasil@sanrio.com.br"> sanriodobrasil@sanrio.com.br</a></p>
        <p>Portaria: 50 ou #</p>
        <p>Show Room: 5169</p>
        </div>
      </div>
    </div>

   </div> 

 <!--<hr class="featurette-divider">-->
</div>

</div>

</div>
