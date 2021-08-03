
<!DOCTYPE html>
<html lang="pt-br.UTF8">
  <head>
    <title>INTRANET_SDB</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="Projeto Intranet">
    <meta name="author" content="André Nascimento">
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

<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Inserir Dados para Cadastro</h2>

<hr class="featurette-divider">

<form id="form1" name="form1" method="post" action="inserir_lr.php">
<div class="form-group row">



<div class="col-xs-6">

<label for="txtcal_firstname">Nome:
<input class="form-control" name="txtnome" type="text" id="txtcal_firstname" placeholder="Informe o Nome do colaborador"/><label>



<label for="txtcal_lastname">Sobrenome:
<input class="form-control"  name="txtsobrenome" type="text" id="txtcal_lastname" placeholder="Informe o Sobrenome do colaborador"/><label>



<label   for="txtcal_cargo">Cargo:
<input class="form-control" size="45" name="txtcargo" type="text" id="txtcal_cargo" placeholder="Informe o Cargo"/><label>

    </div>
 <div class="col-xs-3">
<label  for="txtcal_departamento">Departamento:
<input list="txtdepartamento" class="form-control" name="txtdepartamento" type="text" id="txtcal_departamento" placeholder="Informe o Departamento" multiple="multiple"/><label>
<datalist id="txtdepartamento">
      <option value="Dir Geral">
      <option value="Dir Licenciamento">
      <option value="Dir Novos Negócios">
      <option value="Dir Vendas Diretas">
      <option value="Depto Adm Fin">
      <option value="Controladoria">
      <option value="Depto Adm Fin">
      <option value="Importação">
      <option value="Depto Adm Fin">
      <option value="Logística">
      <option value="Depto Adm Fin">
      <option value="R.H">
      <option value="Depto Adm Fin">
      <option value="Tec. Inf.">
      <option value="Depto Licenc.">
      <option value="Internacionais">
      <option value="Depto Licenc. Nacionais">
      <option value="Depto Marketing">
      <option value="Depto Marketing">
      <option value="Fundo Promoção">
      <option value="Depto Comercial">
      <option value="Depto Design">
      <option value="Depto WEB">
      <option value="Depto Adm Fin.">
      <option value="Depto Jurídico">
      </datalist>
    </input>

<label   for="intcal_telephone">Ramal:
<input class="form-control" name="inttelephone" type="text" id="txtcal_telephone" placeholder="Informe o Ramal"/><label>



<label   for="txtcal_email">Email:
<input class="form-control" size="35" name="txtemail" type="text" id="txtcal_email" placeholder="Informe o Email"/><label>


</div>
<div class="col-sm-12">
<label>
<input type="submit" name="cadastrar" value="Cadastrar"/><label></td>

</div>
</div>
</form>
 <hr class="featurette-divider">

<a href="table_list_Adm.php"><button type="button" class="btn btn-danger">CANCELAR</button></a>




</div>
<div id="footer">
  
</div>
</div>
</div>
</body>
</html>