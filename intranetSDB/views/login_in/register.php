
<div class="container-fluid">
           <div class="row">               
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

 <h2>Cadastro de Colaboradores<span class="glyphicon glyphicon-user"></span></h2>
 <hr class="featurette-divider">       
                  
    <!--O campo de entrada de nome de usuário usa uma verificação de padrão HTML5 -->
      <div class="col-xs-6">
    <!-- O campo de entrada de e-mail usa uma verificação de tipo de e-mail HTML5 -->

    <?php

@include("conec.php");

$sql = "SELECT * FROM departamento ORDER BY nome_depto ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>

<form method="post" action="register.php" name="registerform">
    <div class="form-group">
    <div class="col-xs-6">
      <label for="login_input_name" >Nome:</label>
     <input id="login_input_name" class="form-control" type="text" placeholder="Digite o Nome" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

<label for="login_input_sobrenome">Sobrenome</label>
<input id="login_input_sobrenome" class="form-control" type="text" placeholder="Digite o Sobrenome" pattern="[a-zA-Z0-9]{2,64}" name="user_sobrenome" required />
 

    <label for="login_input_email">E-mail</label>
    <input id="login_input_email" class="form-control" type="email" placeholder="EX: mtw-ecomerce@MTW.com" name="user_email" required />    

       
<label for="login_input_depto">Departamento</label>
<select class="form-control" id="login_input_depto" name="nome_depto" required>

<?php while($linha = mysql_fetch_array($resultado)){ 
$cod_depto = $linha["cod_depto"];
$nome_depto = $linha["nome_depto"];
?>
<option><?=$nome_depto;?><br></option>
<?php
}
?>
</select>

    <label for="login_input_ramal">Ramal</label>
    <input id="login_input_ramal" class="form-control" type="text" class="form-control" name="nome_dep" required />
 
  </div>         
 
    <div class="col-xs-4">
    <label for="login_input_password_new">Senha</label>
    <input id="login_input_password_new" class="form-control" type="password" placeholder="No mínimo 6 Caracteres" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
   
    <label for="login_input_password_repeat">Digite a senha Novamente</label>
    <input id="login_input_password_repeat" class="form-control" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />   
    </div>

  
 <div class="col-sm-12">
 <hr class="featurette-divider">
     <input type="submit" class="btn btn-success" name="register" value="Register"/>
    </div>
  

</div>
</form>

</div>
</div>
</div>