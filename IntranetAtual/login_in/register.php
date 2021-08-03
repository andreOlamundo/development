
<div class="container-fluid">
  <div class="row">               
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <h2>Cadastro de Colaboradores<span class="glyphicon glyphicon-user"></span></h2>
 <hr class="featurette-divider">
 <?php
// Mostrar potenciais erros / feedback (do objeto de registro)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo "<script>alert('$message');</script>";
        }
    }
}
?> 
  
<!-- O campo de entrada de e-mail usa uma verificação de tipo de e-mail HTML5 -->

<form id='menu' method="post" action='controller/instancias.php?cod=10' name="registerform">
 <div class="form-group">
   <div class="col-sm-6">
 <input id="login_input_namecolab" class="form-control" type="text" placeholder="Nome do colaborador" title="Digite o Nome do colaborador" maxlength="64" name="user_namecolab" required />
 <br>


<input id="login_input_sobrenome" class="form-control" type="text" placeholder="Digite o Sobrenome" title="Digite o Sobrenome do colaborador" pattern="[a-zA-Z0-9]{2,64}" maxlength="64" name="user_sobrenome" required /> 
   <br>
    <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input id="login_input_email" class="form-control" type="email" placeholder="sanrio@sanrio.com" title="E-mail corporativo" name="user_email" required />  
    </div>  

      
<label for="login_input_depto">Departamento</label>
<select class="form-control" id="login_input_depto" type="text" name="cod_depto" required>

    <?php

@include("conec.php");


$sql = "SELECT * FROM departamento ORDER BY nome_depto ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>


<?php while($linha = mysql_fetch_array($resultado)){ 
$cod_depto = $linha["cod_depto"];
$nome_depto = $linha["nome_depto"];
?>
<option><?=$nome_depto;?><br></option>
<?php
}
?>
</select>

<label for="login_input_cargo">Cargo</label>
<select class="form-control" id="login_input_cargo" type="text" name="cod_cargo" required>

    <?php

@include("conec.php");

$sql = "SELECT * FROM cargo ORDER BY nome_cargo ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>


<?php while($linha = mysql_fetch_array($resultado)){ 
$cod_cargo = $linha["cod_cargo"];
$nome_cargo = $linha["nome_cargo"];
?>
<option><?=$nome_cargo;?><br></option>
<?php
}
?>
</select>
<br>


 <div class="input-group">
       <span class="input-group-addon"><i class=" glyphicon glyphicon-earphone"></i></span>
 <input id="login_input_ramal" class="form-control" type="tel" placeholder="0-0-0-0" class="form-control" pattern="[0-9]+$" maxlength="4" size="8" name="user_ramal" required />
</div>
</div>

<div class="col-sm-4"> 
  <div class="input-group">

       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
       <input id="login_input_name" class="form-control" type="text" placeholder="Digite o Nome de usuário" title="Digite o Nome de usuário para acesso as funcionalidades da Intranet" pattern="[a-zA-Z0-9-.]{2,64}"  maxlength="64" name="user_name" required />
    </div>
   <br>
</div>
       
 
    <div class="col-sm-4">
     <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="login_input_password_new" class="form-control" type="password" placeholder="Senha com  mínimo 6 Caracteres" maxlength="12" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
   </div>
   <br>
   <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="login_input_password_repeat" class="form-control" type="password" placeholder="Repita a Senha" class="form-control" maxlength="12" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </div>  
  </div>

 <div class="col-sm-12">
 <hr class="featurette-divider">
     <input type="submit" class="btn btn-success" name="register" value="CADASTRAR"/>
    </div>
  

</div>
</form>



</div>
</div>
</div>
